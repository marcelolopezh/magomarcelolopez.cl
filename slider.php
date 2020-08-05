<div class="wrapper" style="background-color: black">
  <div id="bgslideshow" style="background-color:black">


    <div class="w3-content w3-section" style="padding:0px;width:100%;background-color: white;">

      <img class="mySlides w3-animate-left" src="images/slider/01.png" style="width:100%">
      <img class="mySlides w3-animate-fading" src="images/slider/02.png" style="width:100%">
      <img class="mySlides w3-animate-fading" src="images/slider/03.png" style="width:100%">
      <img class="mySlides w3-animate-fading" src="images/slider/05.jpg" style="width:100%">
      <img class="mySlides w3-animate-right" src="images/slider/04.png" style="width:100%">


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
        if (myIndex==1 || myIndex==5){
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 2000);
        }
        else{
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 7000);
        }

    }
    </script>
  </div>
</div>
