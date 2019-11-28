<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\UserKey;
use App\UserDietPlan;
use App\UserProfile;
use App\Diet;
use App\Recipe;
use App\Ingredient;

class DietPlanController extends Controller
{

    // diet detail
    public function dietDetail($key, $id, Request $request) {

        $diet_recipes = Recipe::where('diet_id', $id)->get();
        $diet_ingredients = Ingredient::where('diet_id', $id)->get();
        $user_profiles = UserProfile::where('user_key_num', $key)->first();

        return view('dietplan.showdiet', [
            'diet_recipes'        => $diet_recipes,
            'diet_ingredients'    => $diet_ingredients,
            'user_profiles'       => $user_profiles
        ]);
    }
    // end diet detail

    //set diet plan
    public function showDietPlan($key, $week_num) {

        $userCount = UserKey::where('user_key', $key)->get()->count();
        if($userCount == 0) {
            $result['success'] = false;
            return view('dietplan.pageerror', [
                'error'     => "doesn't exist diet plan!",
                'result'    => $result
            ]);
        } 

        $user_profile = UserProfile::where('user_key_num', $key)->first();
        $user_diet_plan = UserDietPlan::where('user_key_num', $key)->get();    
        
        $weekCount = 7;
        $breakfast = [];
        $brunch = [];
        $lunch = [];
        $dinner = [];
        $result = [];

        for($j=0; $j<$weekCount; $j++) {
            $date = ($week_num - 1) * 7 + $j;
            $breakfast[] = Diet::select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['breakfast'])->first();
            $brunch[] = Diet::select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['brunch'])->first();
            $lunch[] = Diet::select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['lunch'])->first();
            $dinner[] = Diet::select('id', 'name', 'image_url')->where('id', $user_diet_plan[$date]['dinner'])->first();                        
        }

        $result['startDate'] = 7 * ($week_num - 1) + 1;
        $result['recipe'][] = $breakfast;
        $result['recipe'][] = $brunch;
        $result['recipe'][] = $lunch;
        $result['recipe'][] = $dinner;
        
        return view('dietplan.final', compact('key'), [
            'profile'      => $user_profile,
            'diet_plan'    => $result
        ]);
        
    }
    //end show diet plan

    //save Diet plan
    public function saveDietPlan(Request $request) {

        $kCal = $request->input('cal');
        $material = $request->input('material');
        $profile = $request->input('profile');
        
        $user_key = uniqid();

        $i = 0;
        while($i < 60) {

            $breakfast = Diet::where('division', '1')->whereIn('material', $material)->get()->random();
            $brunch = Diet::where('division', '2')->whereIn('material', $material)->get()->random();
            $lunch = Diet::where('division', '3')->whereIn('material', $material)->get()->random();

            $sumCal = $breakfast[0]['kcal'] + $brunch[0]['kcal'] + $lunch[0]['kcal'];
            $rangeMin = $kCal - $sumCal - 50;
            $rangeMax = $kCal - $sumCal + 50;
            $dinnerCount = Diet::where('division', '4')->whereBetween('kcal', [$rangeMin, $rangeMax])->get()->count();
            
            if($dinnerCount == 0) {
                $maxCal = Diet::where('division', '4')->max('kcal');
                if($maxCal < $rangeMax) {
                    $dinner = Diet::where('division','4')->where('kcal',  $maxCal)->get();
                    $dinner = $dinner[0];
                    $results[$i] = [$breakfast, $brunch, $lunch, $dinner];
                    $i++;
                }
            } else {
                for($j = 0; $j < count($dinnerCount); $j++) {
                    $dinner = $dinnerCount[$j];
                    $results[$i] = [$breakfast, $brunch, $lunch, $dinner];
                    $i++;    
                }
            }    
        }

        $new_user_key = UserKey::create([
            'user_key' => $user_key
        ]);

        $new_user_profile = UserProfile::create([
            'user_key_num'      => $user_key,
            'kcal'              => $profile[0],
            'water'             => $profile[1],
            'age'               => $profile[2],
            'weight'            => $profile[3],
            'archieve_weight'   => $profile[4],
            'bmi'               => $profile[5]
        ]);

        $day_num = 1;
        foreach($results as $result) {

            $new_user_diet_plan = UserDietPlan::create([
                'user_key_num'      => $user_key,
                'day_num'           => $day_num,
                'breakfast'         => $result[0]['id'],
                'brunch'            => $result[1]['id'],
                'lunch'             => $result[2]['id'],
                'dinner'            => $result[3]['id']
            ]);
            $day_num++;
        }
        
        $response = response(
            200
        )
        ->header('Content-Type', 'application/json');
    }
    // end save Diet plan
    
}
