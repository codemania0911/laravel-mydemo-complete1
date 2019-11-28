import { get } from "http";

var gender;
var physical;
var products = [];
var working;
var measurement = [];
var bmi;
var archieve_weight;
var water;
var bmr;
var metabolicAge;
var target_weight;
var showData;

// stop frame
$(".carousel").carousel({
  interval: false
});
// end stop frame

// svg-select animation
$(".svg-select").click(function() {

  if( $(this).attr('data-products') == "nomeat") {
    products = [];
    $(".svg-select").removeClass("checked");
    $(this).addClass("checked");
  } else {
    $("#nomeat").removeClass("checked");
    if($(this).hasClass("checked")) {
      $(this).removeClass("checked");
      products.splice($.inArray($(this).attr('data-products'), products), 1);
    } else {
      $(this).addClass("checked");
      products.push($(this).attr('data-products'));
    }
  }
  
})
// end svg-select animation

// get gender
$(".gender").click(function() {
  gender = $(this).attr('data-gender');
})
// end get gender

// get physical activity 
$(".physical").click(function() {
  physical = $(this).attr('data-physical');
})
// end gt physical activity

// select typical day
$(".typical").click(function() {
  working = $(this).attr('data-typical');
})
// end select typical day

function initChart(el) {
  var data = el.data();
  var size = data.size ? data.size : 270;
  var line = data.line ? data.line : 20;
  var bgcolor = data.bgcolor ? data.bgcolor : '#ffffff';
  var trackcolor = data.trackcolor ? data.trackcolor : '#c14240';
  var speed = data.speed ? data.speed : 3000;

  el.easyPieChart({
    barColor: trackcolor,
    trackColor: bgcolor,
    scaleColor: false,
    scaleLength: false,
    lineCap: 'butt',
    lineWidth: line,
    size: size,
    rotate: 0,
    animate: speed,
    onStep: function(from, to, percent) {
      $(el).find('.percent').text(Math.round(percent));
    }
  });
}

// get measurements
$(document).on('click', '.measurement', function (event) {
  
  var $chart = $('#chart-processing .chart');
  $chart.appear();
  initChart($chart);
  measurement.push($("#age").val(), $("#height").val(), $("#weight").val(), $("#target_weight").val());
  
  age = +measurement[0];
  height = +measurement[1];
  weight= +measurement[2];
  target_weight = +measurement[3];

  bmi = weight*10000/(measurement[1]*measurement[1]);
  bmi = bmi.toFixed(2);

  water = weight*0.3;

  if(gender == '1') {
    bmr = (9.99*weight) + (6.25*height - (4.92*age + 5));
  } else {
    bmr = (9.99*weight + (6.25*height - (4.92*age) - 161));
  }

  if(physical == "1"){
    bmr = bmr*1.2;
  }
  if(physical == "2"){
    bmr = bmr*1.375;
  }
  if(physical == "3"){
    bmr = bmr*1.55;
  }
  if(physical == "4"){
    bmr = bmr*1.725;
  }
  if(physical == "5"){
    bmr = bmr*1.9;
  }

  // get Caloires
  bmr = (bmr).toFixed(0);

    if(2 < age && age < 3) {
      if(bmr > 1200) {
        metabolicAge = bmr - 1200;
        metabolicAge = metabolicAge/100;
        metabolicAge = (metabolicAge).toFixed(0);
        metabolicAge += age;
      } else {
        metabolicAge = 1200 -bmr;
        metabolicAge = metabolicAge/100;
        metabolicAge = (metabolicAge).toFixed(0);
        metabolicAge = age - metabolicAge;
      }
    }
    if(4 <= age && age < 8) {
      if(bmr > 1500) {
        metabolicAge = bmr - 1500;
        metabolicAge = metabolicAge/100;
        metabolicAge = (metabolicAge).toFixed(0);
        metabolicAge += age;
      } else {
        metabolicAge = 1500 - bmr;
        metabolicAge = metabolicAge/100;
        metabolicAge = (metabolicAge).toFixed(0);
        metabolicAge = age - metabolicAge;
      }
    }
    if(9 <= age && age < 13) {
      if(gender == "1") {
        if(bmr > 2000) {
          metabolicAge = bmr - 2000;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 2000 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }else {
        if(bmr > 1800) {
          metabolicAge = bmr - 1800;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 1800 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }
    }
    if(14 <= age && age < 18) {
      if(gender == "1") {
        if(bmr > 2600) {
          metabolicAge = bmr - 2600;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 2600 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }else {
        if(bmr > 1900) {
          metabolicAge = bmr - 1900;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 1900 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }
    }
    if(19 <= age && age < 30) {
      if(gender == "1") {
        if(bmr > 2700) {
          metabolicAge = bmr - 2700;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 2700 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }else {
        if(bmr > 2100) {
          metabolicAge = bmr - 2100;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 2100 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }
    }
    if(31 <= age && age < 50) {
      if(gender == "1") {
        if(bmr >2500) {
          metabolicAge = bmr - 2500;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 2500 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }else {
        if(bmr > 2000) {
          metabolicAge = bmr - 2000;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 2000 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }
    }
    if(age >= 51) {
      if(gender == "1") {
        if(bmr > 2300) {
          metabolicAge = bmr - 2300;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 2300 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }else {
        if(bmr > 1800) {
          metabolicAge = bmr - 1800;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge += age;
        } else {
          metabolicAge = 1800 - bmr;
          metabolicAge = metabolicAge/100;
          metabolicAge = (metabolicAge).toFixed(0);
          metabolicAge = age - metabolicAge;
        }
      }
    }

    bmr = (bmr-50).toString() +"~"+ (+bmr+50).toString();
    target_weight = weight - 4;
    water.toFixed(1);

    $("#diet_bmi").text(bmi);
    $("#diet_metabolic_age").text(metabolicAge);
    $("#diet_cal").text(bmr);
    $("#diet_archieve_weight").text(weight);
    $("#diet_target_weight").text(target_weight);
    $("#diet_water").text(water);

})
// end get measurements

// send data
$('#send_request').on('click', function () {
  
  console.log($('meta[name="csrf-token"]').attr("content"));
  // $demo = {
  //   'cal':'2050',
  //   'material':['pork', 'beef', 'chicken', 'broccoli', 'nuts'],
  //   'profile':['1900~2000', '2.5', '25', '70', '65']
  // }
  
  $.ajax({
    url: "/savedietplan",
    method: 'post',
    data: {
      _token: $('meta[name="csrf-token"]').attr("content"),
      cal: '2050',
      material: ['pork', 'beef', 'chicken', 'broccoli', 'nuts'],
      profile:['1900~2000', '2.5', '25', '70', '65', '24.22']
    },
    success: function (response) {
      alert("success!");
      console.log(response);
    }
  })
  
})
// end send data

//save diet plan test
$('#test').on('click', function() {
  $.ajax({
    url: "/dietdetail",
    method: 'get',
    data: {
      _token: $('meta[name="csrf-token"]').attr("content"),
      id:'20'
    },
    success: function (response) {
      alert("success!");
      console.log(response);
    }
  })
})
// end save diet plan test

// select week
  $('#select_week').on('change', function() {
    var link_url = "/showdiet/";
    var userkey = $('#user_key').val();
    var week = "/week/";
    var week_val = $('#select_week').val();
    link_url = link_url.concat(userkey, week, week_val);

    console.log(link_url);
    window.open(link_url, '_blank');
    // $.ajax({
    //   url: link_url,
    //   method: 'get',
    //   data: {
    //     _token: $('meta[name="csrf-token"]').attr("content")
    //   }
    // })
  })
  
// end select week change

// diet detail 
$('.diet_detail').on('click', function(e) {
  var link_url = "/dietdetail/";
  var userkey = $('#user_key').val();
  var diet_id = $(this).attr("data-recipe-id");
  link_url = link_url.concat(userkey, "/recipe/", diet_id);
  
  window.open(link_url, '_blank');

})
// end diet detail