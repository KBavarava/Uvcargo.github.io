<?php


?>

<html>
<head>
     <script src="./removeBanner.js"></script>
      <link rel="stylesheet" href="assets/css/main.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        
     <meta name="viewport" content="width=device-width, initial-scale=1">
              <style>
            .mySlides {display:none; height: 100% width: 100%}
        </style>
        


        
   </head>    

<body>  


      

        <div class="" style="max-width:100%"  >
  
          <img class="mySlides" src="01.jpg" style="max-width:100%" >
          <img class="mySlides" src="02.jpg" style="max-width:100%">
          <img class="mySlides" src="03.jfif" style="max-width:100%">
          <img class="mySlides" src="04.jfif" style="max-width:100%">  
          <img class="mySlides" src="05.jfif" style="max-width:100%">
          <img class="mySlides" src="06.jfif" style="max-width:100%">
          <img class="mySlides" src="07.jpg" style="max-width:100%">
          <img class="mySlides" src="08.jpg" style="max-width:100%">
          
  
        </div>

              <script>
                  var myIndex = 0;
                  carousel();

                  function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                      x[i].style.display = "none";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 2500); // Change image  1.5 seconds
                  }
              </script> 
              
              <div class="gallery">

                    <div class="content">
                      <div class="media all people">
                        <a href="images/fulls/101.jpg"><img src="images/thumbs/101.jpg"/></a>
                      </div>
                      <div class="media all place">
                        <a href="images/fulls/102.jpg"><img src="images/thumbs/102.jpg"/></a>
                      </div>
                      <div class="media all thing">
                        <a href="images/fulls/103.jpg"><img src="images/thumbs/103.jpg"/></a>
                      </div>
                      <div class="media all people">
                        <a href="images/fulls/104.jpg"><img src="images/thumbs/104.jpg"/></a>
                      </div>
                      <div class="media all place">
                        <a href="images/fulls/105.jpg"><img src="images/thumbs/105.jpg"/></a>
                      </div>
                      <div class="media all thing">
                        <a href="images/fulls/106.jpg"><img src="images/thumbs/106.jpg"/></a>
                      </div>
                      <div class="media all people">
                        <a href="images/fulls/107.jpg"><img src="images/thumbs/107.jpg"/></a>
                      </div>
                      <div class="media all place">
                        <a href="images/fulls/108.jpg"><img src="images/thumbs/108.jpg"/></a>
                      </div>
                      <div class="media all thing">
                       <a href="images/fulls/109.jpg"><img src="images/thumbs/109.jpg"/></a>
                      </div>
                      <div class="media all people">
                        <a href="images/fulls/110.jpg"><img src="images/thumbs/110.jpg"/></a>
                      </div>
                      <div class="media all place">
                        <a href="images/fulls/1111.jpg"><img src="images/thumbs/1111.jpg"/></a>
                      </div>
                      <div class="media all place">
                        <a href="images/fulls/112.jpg"><img src="images/thumbs/112.jpg"/></a>
                      </div>          

</body>
</html>
