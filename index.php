<?php 
  include 'include/header.php';
?>
    <ul class="body_slides">
            <li></li>
            <li></li>
            <li></li>
        </ul>
<div class="container">
  <div class="row">
    <div class="BrendText">
      <h2>
        <span>Я педагог-психолог</span>
        <br>и буду рада помочь вам!
      </h2>
    <span class="titletext">Смолова Светлана Алексеевна!</span>
    <div class="knopka">
     <a href="cont.php"><button class="btn btn-primary">Связаться с психологом</button></a>
    </div><br>
    </div>
  </div>
</div>
 </body>
<style>
  .body_slides{
  list-style:none;
  margin:0;
  padding:0;
  z-index:-2; 
  background:#000;}
.body_slides,
.body_slides:after{
    position: fixed;
  width:100%;
  height:100%;
  top:0px;
  left:0px;}

@-webkit-keyframes anim_slides {
0% {opacity:0;}
6% {opacity:1;}
24% {opacity:1;}
30% {opacity:0;}
100% {opacity:0;}
}
@-moz-keyframes anim_slides {
0% {opacity:0;}
6% {opacity:1;}
24% {opacity:1;}
30% {opacity:0;}
100% {opacity:0;}
}
.body_slides li{
    width:100%;
  height:100%;
  position:absolute;
  top:0;
  left:0;
    background-size:cover;
    background-repeat:none;
  opacity:0;
    -webkit-animation: anim_slides 18s linear infinite 0s;
    -moz-animation: anim_slides 18s linear infinite 0s;
    -o-animation: anim_slides 18s linear infinite 0s;
    -ms-animation: anim_slides 18s linear infinite 0s;
    animation: anim_slides 18s linear infinite 0s;
}
  
.body_slides li:nth-child(1){
background-image: url(img/slider/slide1.jpg);
background-position: center;
}
.body_slides li:nth-child(2){
-webkit-animation-delay: 6.0s;
-moz-animation-delay: 6.0s;
background-image: url(img/slider/slide2.jpg);
background-position: center;
}
.body_slides li:nth-child(3){
-webkit-animation-delay: 12.0s;
-moz-animation-delay: 12.0s;
background-image: url(img/slider/slide3.jpg);
background-position: center;
}
</style>
<?php 
  include 'include/footer.php';
?>