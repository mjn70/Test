<?php include('includes/header.php'); ?>
    
<?php include('script.php'); ?>
<style>
.mySlides {display:none}
.demo {cursor:pointer}
</style>
<body  class="bgimg"style="text-align: center"  > 
        


<div class="w3-content w3-display-top" style="max-width:1000px">
    
    <img class="mySlides" src="/imgs/Air/air.jpg" style="max-width:100%">
    <img class="mySlides" src="/imgs//landes/land1.jpg" style="max-width:100%">
    <img class="mySlides" src="/imgs//seas//sea1.jpg" style="max-width:100%">
</div>
 <div class="w3-row-padding w3-section w3-display-bottommiddle">
    <div class="w3-col s4">
        <img class="demo w3-opacity w3-hover-opacity-off w3-round-xxlarge" src="/imgs/Air/air.jpg" style="max-width:100%" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
        <img class="demo w3-opacity w3-hover-opacity-off w3-round-xxlarge" src="/imgs//landes/land1.jpg" style="max-width:100% " onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
        <img class="demo w3-opacity w3-hover-opacity-off w3-round-xxlarge" src="/imgs//seas//sea1.jpg" style="max-width:100%" onclick="currentDiv(3)">
    </div>
  </div>


 <script>
              
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>
    
    </body>
<?php include('includes/footer.php'); ?>

