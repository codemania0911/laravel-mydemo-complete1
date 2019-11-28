@extends('masters.master')

@section('content')

<section class="s-pt-40 s-pb-30 s-py-lg-130 timetable ds text-center text-md-left" id="timetables">
    <div class="container">
        <div class="row">
            <div class="container mt-5 mb-5" id="diet-logo">
                <img  src="../../../assets/s-logo.png">
            </div>
            <form class="woocommerce-ordering">
                <select id="select_week" name="orderby" class="orderby">
                    @for ($i=0; $i<9; $i++)
                        <option value="{{$i+1}}">Week {{$i+1}}</option>
                    @endfor
                </select>
            </form>
            <!-- input email-->
                <div class="intro_layers divider-35 flex-btn" data-animation="fadeInUp">       
                    <p class="form-row form-row-wide">
                        <input id="email" type="email" class="input-text" placeholder="Enter your email address" autocomplete="organization" required>
                    </p>
                </div>
                <div class="btn btn-light">Continue</div> 
            <!-- input email-->
            <input type="hidden" id="user_key" value="{{ $key }}">
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h3>Personalized meal plan</h3>
                    <img class="image-wrap" src="../../../assets/images/icon-main2.png" alt="">
                </div>
                <div class="d-none d-lg-block divider-60"></div>
            </div>

            <div class="col-12">
                <ul class="nav nav-tabs form-tabs visible-md">
                    @for ($i=0; $i<7; $i++)
                        <li class="tab-selector nav-item {{$i==0?'active':''}}">
                            <a class="nav-link first" href="#tab{{$i+1}}" data-toggle="tab">Day {{$diet_plan['startDate'] + $i}}</a>
                        </li>
                    @endfor
                </ul>
                <select class="form-control hidden-md hidden-lg hidden-xl" id="tab_selector">

                    @for ($i=0; $i<7; $i++)
                        <option value="{{$i}}"> Day{{$diet_plan['startDate'] + $i}} <p class="day_num"></p></option>
                    @endfor

                </select>
                
                <div class="tab-content">

                    @for ($i=0; $i<7; $i++)
                    <div class="tab-pane {{ $i == 0 ? 'active':''}}" id="tab{{$i+1}}">

                        {{-- Add breakfast, brunch, lunch, dinner --}}
                        @foreach($diet_plan['recipe'] as $plan)
                        <div class="media bordered diet_detail" data-recipe-id="{{$plan[$i]['id']}}">
                            <img src="{{$plan[$i]['image_url']}}">
                            <div class="media-body">
                                <h5>                                    
                                    {{$plan[$i]['name']}}
                                </h5>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @endfor

                </div>
            </div>
<!-- show Data-->
<div class="carousel-item">
    <div class="intro_layers">
        <div class="d-inline-block">
            <h2 class="intro_featured_word">
                YOUR PROFILE SUMMARY
            </h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="divider-70 d-none d-lg-block">
                    
                </div>
                    <div class="col-12">
                        <div class="row divider-25">
                            <div class="col-lg-4">
                                <div class="card text-center ds">

                                    <img class="card-img-top" src="../../assets/images/team/02.jpg" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            BMI
                                        </h5>
                                        <p class="card-text">
                                            Your BMI: <b id="diet_bmi"></b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card text-center ds">

                                    <img class="card-img-top" src="../../assets/images/team/03.jpg" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Metabolic Age
                                        </h5>
                                        <p class="card-text">
                                            Your Metabolic Age: <b id="diet_metabolic_age"></b> age
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card text-center ds">

                                    <img class="card-img-top" src="../../assets/images/team/03.jpg" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Calories
                                        </h5>
                                        <p class="card-text">
                                            Recommended Calories: <b id="diet_cal"></b>Kcal
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row divider-25">
                            <div class="col-lg-4">
                                <div class="card text-center ds">

                                    <img class="card-img-top" src="../../assets/images/team/04.jpg" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            My weight
                                        </h5>
                                        <p class="card-text">
                                            Your weight after your keto meal plan will be: <b id="diet_archieve_weight"></b> Kilograms
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card text-center ds">

                                    <img class="card-img-top" src="../../assets/images/team/03.jpg" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Achievable Weight
                                        </h5>
                                        <p class="card-text">
                                            Achievable weight for 28 days of your Keto Diet: <b id="diet_target_weight"></b>  Kilograms
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card text-center ds">

                                    <img class="card-img-top" src="../../assets/images/team/02.jpg" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Lose weight body parts
                                        </h5>
                                        <p class="card-text">
                                            You'll lose weight from these parts:<span> Cheeks, belly, upper & lower limbs</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row divider-25">
                            <div class="col-lg-4">
                                <div class="card text-center ds">

                                    <img class="card-img-top" src="../../assets/images/team/04.jpg" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Water
                                        </h5>
                                        <p class="card-title">
                                            Recommended Water: <b id="diet_water"></b> L 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="card text-center ds">

                                    <img class="card-img-top" src="../../assets/images/team/02.jpg" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Ketogenic Diet
                                        </h5>
                                        <p class="card-text">
                                            Percentage content of fat, protein and carbs
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="btn btn-light processing" href="#slide" role="button" data-slide="next">Continue</div>
            </div>
        </div>
    </div>
</div>
<!-- show Data-->
        </div>
    </div>
</section>



@endsection

@section('ExtraJavascript')
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection