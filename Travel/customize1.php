<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
  <style>

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 10px;
  width: 90%;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}



    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    font-family: Raleway;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button1:hover {
    background-color: #008CBA;
    color: white;

}
#prevBtn {
  background-color: #bbbbbb;
}

.container1 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark1 {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark1 {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark1 {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark1:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark1:after {
    display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark1:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.container2 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container2 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark2 {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark2 {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container2 input:checked ~ .checkmark2 {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark2:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container2 input:checked ~ .checkmark2:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container2 .checkmark2:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #205ad8;
}

.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
/*style items (options):*/
.select-items {
  position: sticky;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover {
  background-color: rgba(0, 0, 0, 0.1);
}

  </style>
<title></title>

<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 //function hideURLbar(){ window.scrollTo(0,1); } </script>-->
 
 
 <script src="places.js"></script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php include('function.php'); ?>

<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<!--About-->

<div class="top-tours-head text-center">
    <h3>Customize your travel plan</h3>
    <span></span><img src="images/star.png" alt=""><span></span>
    </div>


    <!--Form Starting-->
     
<form id="regForm" method="POST" action="#" onsubmit="return false;">
  <center>
<!--   
<div class="container">
        <h3> Let's get your location first.</h3>
      </div></br></br>
<!--<button class="button button1" onclick="getLocation()">Get you current location</button></br></br>
<p id="demo"></p>
<div id="mapholder"></div>

<p><input type='text' id='locationTextBox' placeholder='Enter Location'></p></br></br>
</br></br>
-->
<!-- 2nd part of form-->

<!--
<center><div class="container">
        <h3> Select Duration of Travel.</h3>
      </div></br></br></center>



<label class="container2">1 to 3 Days
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark2"></span>
</label>
<label class="container2">4 to 6 Days
  <input type="radio" name="radio">
  <span class="checkmark2"></span>
</label>
<label class="container2">7 to 9 Days
  <input type="radio" name="radio">
  <span class="checkmark2"></span>
</label>
<label class="container2">10 to 12 Days
  <input type="radio" name="radio">
  <span class="checkmark2"></span>
</label>
<label class="container2">13 Days or more
  <input type="radio" name="radio">
  <span class="checkmark2"></span>
</label>
<!--<label class="container2">Not Decided
  <input type="radio" name="radio">
  <span class="checkmark2"></span>
</label>
</br></br>

-->

<!-- 3rd part of form-->

<center><div class="container">
        <h3> Select Month of Travel:</h3>
      </center></br>

<div>
  <select>
    <option value="0">MONTH:</option>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
  </select>
</div></br>
  </br></br>

    <!-- 5th part of form-->


<center><div class="container">
        <h3> Select your Interest:</h3>
      </div></center></br></br>
<label class="container1">Nature
  <input type="checkbox" id="Nature" value="Nature" checked="checked">
  <span class="checkmark1"></span>
</label>
<label class="container1">Historical
  <input type="checkbox" id="Historical" value="Historical">
  <span class="checkmark1"></span>
</label>
<label class="container1">Entertainment
  <input type="checkbox" id="Entertainment" value="Entertainment">
  <span class="checkmark1"></span>
</label>
<label class="container1">Beaches
  <input type="checkbox" id="Beaches" value="Beaches">
  <span class="checkmark1"></span>
</label>
<label class="container1">Religious
  <input type="checkbox" id="Religious" value="Religious">
  <span class="checkmark1"></span>
</label>

  </br></br>
 

<!-- 4th part of form-->

<center><div class="container">
        <h3> Select Bugdet of your choice:</h3>
      </div></center></br></br>

<label class="container2">0-500₹
  <input type="radio" checked="true" name="budget" id="1" value="20">
  <span class="checkmark2"></span>
</label>
<label class="container2">500-1000₹
  <input type="radio" name="budget" id="2" value="40">
  <span class="checkmark2"></span>
</label>
<label class="container2">1000-2000₹
  <input type="radio" name="budget" id="3" value="60">
  <span class="checkmark2"></span>
</label>
<label class="container2">2000-5000₹
  <input type="radio" name="budget" id="4" value="80">
  <span class="checkmark2"></span>
</label>

</br></br>



  <!-- 6th part of form-->


<center><div class="container" id="lol">
      </div></center></br></br>



<div style="overflow:auto;">
    <div style="float:right;">
      <button class="button button1"  onclick="myFunction()">Submit</button>
      <button class="button button1" id="map-button" onclick="window.location='map.html'">GoToMap</button>
    </div>
  </div>

</center>
</form>

<script type="text/javascript">
function myFunction(){
  document.getElementById("lol").innerHTML = "";
  document.cookie="";
  //var loc = document.getElementById("locationTextBox").value;
  var cookieText="";
  var cookieText2;
  var checkboxes = "";
  var radios = "";
  if(document.getElementById("Nature").checked)
  {
    checkboxes += document.getElementById("Nature").value+"<br>";
    //alert(places.Nature[0].Latlng);
    cookieText += "Nature,";
     /*
    for(var i=0;i<places.Nature.length;i++){
        locations.push(places.Nature[i].Latlng);
      }*/
  }
  if(document.getElementById("Historical").checked)
  {
    checkboxes += document.getElementById("Historical").value+"<br>";
    cookieText += "Historical,";
  }
  if(document.getElementById("Entertainment").checked)
  {
    checkboxes += document.getElementById("Entertainment").value+"<br>";
    cookieText += "Entertainment,";
  }
  if(document.getElementById("Beaches").checked)
  {
    checkboxes += document.getElementById("Beaches").value+"<br>";
    cookieText += "Beaches,";
  }
  if(document.getElementById("Religious").checked)
  {
    checkboxes += document.getElementById("Religious").value+"<br>";
    cookieText += "Religious.";
  }


  if(document.getElementById("1").checked)
  {
    radios += "1 with value "+ document.getElementById("1").value + " is checked" +"<br>";
    cookieText2 = document.getElementById("1").value;
  }
  else if(document.getElementById("2").checked)
  {
    radios += "2 with value "+ document.getElementById("2").value + " is checked" +"<br>";
    cookieText2 = document.getElementById("2").value;
  }
  else if(document.getElementById("3").checked)
  {
    radios += "3 with value "+ document.getElementById("3").value + " is checked" +"<br>";
    cookieText2 = document.getElementById("3").value;
  }
  else
  {
    radios += "4 with value "+ document.getElementById("4").value + " is checked" +"<br>";
    cookieText2 = document.getElementById("4").value;
  }
  document.getElementById("lol").innerHTML += " " +  checkboxes + radios;
  document.cookie = "imp="+cookieText+","+cookieText2;
/*  var x =document.cookie+"";
  var y =document.cookie+"";
  x = x.substring(4,x.length-3);
  y = y.substring(y.length-2);
  document.getElementById("lol").innerHTML += x + "<br>" + y;
*/
}
</script>

<?php include('bottom.php'); ?>
</body>
</html>
