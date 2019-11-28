@extends('masters.master')
<!-- wrappers for visual page editor and boxed version of template -->

@section('content')
    <div id="canvas">
        <div id="box_wrapper">

            <section class="diet-slider">
                <div id="slide"
                    class="carousel slide justify-content-center text-center" data-ride="carousel">
                    
                    <div class="container mt-5 mb-5" id="diet-logo">
                        <img  src="assets/s-logo.png">
                    </div>

                    <div class="carousel-inner ">

                        <!-- select gender-->
                        <div class="carousel-item diet-step-1 active">

                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    Get your Simple Diet Plan
                                </h2>
                            </div>
                            <div class="pt-5 mt-5">
                                <div class="svg-male gender mr-5" href="#slide" role="button" data-slide="next" data-gender="2">
                                    <img src="assets/images/svg/male.svg">
                                </div>
                                <div class="svg-female gender" href="#slide" role="button" data-slide="next" data-gender="2">
                                    <img src="assets/images/svg/female.svg">
                                </div>
                            </div>
                        </div>
                        <!-- select gender-->
                        
                        <!-- select physical-->	
                        <div class="carousel-item diet-step-2">
                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    Physical activity
                                </h2>
                            </div>

                            <div class="intro_layers flex-btn" data-animation="fadeInUp">
                                <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="1">ALMOST NO PHYSICAL ACTIVITY</div>
                                <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="2">I OFTEN GO FOR A WALK</div>
                                <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="3">I EXERCISE 1-2 A WEEK</div>
                                <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="4">I EXERCISE 3-5 TIMES A WEEK</div>
                                <div class="btn btn-light physical" href="#slide" role="button" data-slide="next" data-physical="5">I EXERCISE 5-7 TIMES A WEEK</div>
                            </div>

                        </div>
                        <!-- select physical-->

                        <!-- select meat-->
                        <div class="carousel-item diet-step-3">
                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    Meat
                                </h2>
                            </div>

                            <div class="intro_layer" data-animation="fadeInUp">
                                <h6 class="intro_featured_word">
                                    COOKING IS EASY, WE WILL PROVE IT TO YOU!
                                </h6>
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="beef">
                                        <img src="assets/images/svg/beef.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="pork">
                                        <img src="assets/images/svg/pork.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="chicken">
                                        <img src="assets/images/svg/chicken.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="row divider-25">
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="bacon">
                                        <img src="assets/images/svg/bacon.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="fish">
                                        <img src="assets/images/svg/fish.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" id="nomeat" data-products="nomeat">
                                        <img src="assets/images/svg/nomeat.svg">
                                    </div>
                                </div>
                            </div>

                            <div class="btn btn-light" href="#slide" role="button" data-slide="next">Continue</div>
                        </div>
                        <!-- select meat-->

                        <!-- select veggies-->
                        <div class="carousel-item diet-step-3">

                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    Veggies
                                </h2>
                            </div>

                            <div class="intro_layer" data-animation="fadeInUp">
                                <h6 class="intro_featured_word">
                                    PLEASE SELECT WHICH VEGGIES YOU WOULD LIKE TO BE INCLUDED
                                </h6>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="broccoli">
                                        <img src="assets/images/svg/broccoli.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="mushrooms">
                                        <img src="assets/images/svg/mushroom.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="zucchini">
                                        <img src="assets/images/svg/zucchini.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="row divider-25">
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="cauliflower">
                                        <img src="assets/images/svg/cauliflower.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="asparagus">
                                        <img src="assets/images/svg/asparagus.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="avocado">
                                        <img src="assets/images/svg/avocado.svg">
                                    </div>
                                </div>
                            </div>

                            <div class="btn btn-light" href="#slide" role="button" data-slide="next">Continue</div>
                        </div>
                        <!-- select veggies-->

                        <!-- select product-->
                        <div class="carousel-item diet-step-3">

                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    Products
                                </h2>
                            </div>

                            <div class="intro_layer" data-animation="fadeInUp">
                                <h6 class="intro_featured_word">
                                    PLEASE SELECT WHICH PRODUCTS YOU WOULD LIKE TO BE INCLUDED
                                </h6>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="egg">
                                        <img src="assets/images/svg/eggs.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="nuts">
                                        <img src="assets/images/svg/nuts.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="cheese">
                                        <img src="assets/images/svg/cheese.svg">
                                    </div>
                                </div>
                            </div>
                            <div class="row divider-25">
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="butter">
                                        <img src="assets/images/svg/butter.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="coconut">
                                        <img src="assets/images/svg/coconut.svg">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="svg-material svg-select" data-products="tofu">
                                        <img src="assets/images/svg/tofu.svg">
                                    </div>
                                </div>
                            </div>

                            <div class="btn btn-light" href="#slide" role="button" data-slide="next">Continue</div>
                        </div>
                        <!-- select product-->

                        <!-- select physical-->	
                        <div class="carousel-item diet-step-2">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="d-inline-block">
                                        <h2 class="intro_featured_word">
                                            DESCRIBE A TYPICAL DAY FOR YOU
                                        </h2>
                                    </div>

                                    <div class="intro_layers flex-btn" data-animation="fadeInUp">
                                        <div class="btn btn-light typical" href="#slide" role="button" data-slide="next" data-typical="1">AT THE OFFICE</div>
                                        <div class="btn btn-light typical" href="#slide" role="button" data-slide="next" data-typical="2">AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS</div>
                                        <div class="btn btn-light typical" href="#slide" role="button" data-slide="next" data-typical="3">I SPEND THE BETTER PART OF THE DAY ON FOOT</div>
                                        <div class="btn btn-light typical" href="#slide" role="button" data-slide="next" data-typical="4">MANUAL LABOR</div>
                                        <div class="btn btn-light typical" href="#slide" role="button" data-slide="next" data-typical="5">I MOSTLY STAY AT HOME</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- select physical-->

                        <!-- select measurements-->
                        <div class="carousel-item diet-step-4">
                            <div class="intro_layers">
                                <div class="d-inline-block">
                                    <h2 class="intro_featured_word">
                                        MEASUREMENTS
                                    </h2>
                                </div>

                                <div class="intro_layers divider-35 flex-btn" data-animation="fadeInUp">       
                                    <p class="form-row form-row-wide">
                                        <input type="text" class="input-text" placeholder="Age" autocomplete="organization" id="age" required>
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <input type="text" class="input-text" id="height" placeholder="Height(cm)" autocomplete="organization" id="height" required>
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <input type="text" class="input-text" id="weight" placeholder="Weight(kg)" autocomplete="organization" id="weight" required>
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <input type="text" class="input-text" id="target_weight" placeholder="Target Weight(kg)" autocomplete="organization" required>
                                    </p>
                                
                                    <div class="btn btn-light measurement" type="password" href="#slide" role="button" data-slide="next">Continue</div> 
                                </div>
                            </div>
                        </div>
                        <!-- select measurements-->

                        <!-- processing plan-->
                        <div class="carousel-item diet-step-5 ">
                            <div class="intro_layers">
                                <div class="d-inline-block">
                                    <h2 class="intro_featured_word">
                                        PROCESSING MEAL PLAN
                                    </h2>
                                </div>

                                <div class="intro_layers divider-140 flex-btn" id="chart-processing" data-animation="fadeInUp">
                                    <div class="chart" data-size="240" data-percent="100" data-line="4" data-bgcolor="#e5e5e5" data-trackcolor="#82b440" data-speed="4100">
                                        <div class="chart-meta">
                                            <strong class="percent color-darkgrey"></strong>
                                            <h4 class="text-uppercase thin">processing</h4>
                                        </div>
                                    </div>
                                    <div class="btn btn-light processing" href="#slide" role="button" data-slide="next">Continue</div>
                                    {{-- <a href="{{ route('final') }}"><div class="btn btn-light">Continue</div></a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- processing plan-->

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

                        <!-- input email-->
                        <div class="carousel-item">
                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    DIET for your target weight is ready
                                </h2>
                            </div>
                            <div class="intro_layer" data-animation="fadeInUp">
                                <h6 class="intro_featured_word">
                                    Enter the e-mail address you want to receive your meal plan on:
                                </h6>
                            </div>
                            <div class="intro_layers divider-35 flex-btn" data-animation="fadeInUp">       
                                <p class="form-row form-row-wide">
                                    <input id="email" type="email" class="input-text" placeholder="Enter your email address" autocomplete="organization" required>
                                </p>
                            </div>
                            <div class="btn btn-light measurement" href="#slide" role="button" data-slide="next">Continue</div> 
                        </div>
                        <!-- input email-->

                        <!-- paypal -->
                        <div class="carousel-item">
                            <div class="d-inline-block">
                                <h2 class="intro_featured_word">
                                    DIET for your target weight is ready
                                </h2>
                            </div>
                            <div class="intro_layer" data-animation="fadeInUp">
                                <h6 class="intro_featured_word">
                                    GET YOUR PERSONALIZED KETO DIET!
                                </h6>
                            </div>
                            
                            <div id="send_request" class="btn btn-light">Continue</div> 
                        </div>
                        <!-- paypal -->

                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('ExtraJavascript')
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection