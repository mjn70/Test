<?php $copyname = "MOSA" ?>
<!--    
#    <?php 
#    $seas = arrar('sea1.jpg','sea2.jpg','sea3.jpg','sea4.jpg','sea5.jpg');
#    
#    foreach ($seas as $seas){
#    }
#        echo '<img class="mySlides" src="/imges/seas/$seas" style="width:100%">';
#    ?>
   -->
<html> 

   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <title>Earth Seas</title>
    </head>
  <body style="text-align: center"  > 
        
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
     <div class="w3-display-topleft w3-padding-large w3-xlarge">
      &COPY; <?php echo $copyname; ?>
     </div >
  
  <div class="w3-display-middle>
 
  <img class="mySlides bgimg" src="/imgs/seas/sea1.jpg" style="width:100%">
  <img class="mySlides bgimg" src="/imgs/seas/sea2.jpg" style="width:100%">
  <img class="mySlides bgimg" src="/imgs/seas/sea3.jpg" style="width:100%">
  <img class="mySlides bgimg" src="/imgs/seas/sea4.jpg" style="width:100%">
  <img class="mySlides bgimg" src="/imgs/seas/sea5.jpg" style="width:100%">
  
  <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
  </div>
  
</div>
          <script>
              
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
    
    </body>


</html>