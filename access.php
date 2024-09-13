<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bleam Inc Ventures</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

</head>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<div class='demo_wrapper'>
  
<div class="container spin" ><a href="index.php">  <div class="close_icon spin"></div></div>

</div>



<div class="demo">
  <div class="demo__colored-blocks">
    <div class="demo__colored-blocks-rotater">
      <div class="demo__colored-block"></div>
      <div class="demo__colored-block"></div>
      <div class="demo__colored-block"></div>
    </div>
    <div class="demo__colored-blocks-inner"></div>
    <div class="demo__text">soon</div>
  </div>
  <div class="demo__inner">
    <svg class="demo__numbers" viewBox="0 0 100 100">
      <defs>
        <path class="demo__num-path-1" d="M40,28 55,22 55,78"/>
        <path class="demo__num-join-1-2" d="M55,78 55,83 a17,17 0 1,0 34,0 a20,10 0 0,0 -20,-10"/>
        <path class="demo__num-path-2" d="M69,73 l-35,0 l30,-30 a16,16 0 0,0 -22.6,-22.6 l-7,7"/>
        <path class="demo__num-join-2-3" d="M28,69 Q25,44 34.4,27.4"/>
        <path class="demo__num-path-3" d="M30,20 60,20 40,50 a18,15 0 1,1 -12,19"/>
      </defs>
      <path class="demo__numbers-path" 
            d="M-10,20 60,20 40,50 a18,15 0 1,1 -12,19 
               Q25,44 34.4,27.4
               l7,-7 a16,16 0 0,1 22.6,22.6 l-30,30 l35,0 L69,73 
               a20,10 0 0,1 20,10 a17,17 0 0,1 -34,0 L55,83 
               l0,-61 L40,28" />
    </svg>
  </div>
</div>

<style>
  *, *:before, *:after {
	 box-sizing: border-box;
	 margin: 0;
	 padding: 0;
}
 body {
	 background: #ffffff;
	 font-family: Helvetica, Arial, sans-serif;
}
 .demo {
	 position: absolute;
	 left: 50%;
	 top: 50%;
	 width: 500px;
	 height: 140px;
	 margin-top: -70px;
	 padding: 10px;
	 border-radius: 20px;
	 transform: translateX(-50%);
}
 .demo__colored-blocks {
	 overflow: hidden;
	 position: absolute;
	 left: 50%;
	 top: 0;
	 width: 500px;
	 height: 100%;
	 margin-left: -250px;
	 padding: 10px;
	 border-radius: 20px;
	 perspective: 1000px;
	 animation: demoAnim 4s ease-in-out infinite, contAnim 4s infinite;
}
 .demo__colored-blocks-rotater {
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 border-radius: inherit;
	 animation: rotation 1.3s linear infinite;
}
 .demo__colored-blocks-inner {
	 overflow: hidden;
	 position: relative;
	 height: 100%;
	 background: #0ea2bd;
	 border-radius: inherit;
}
 .demo__colored-block {
	 position: absolute;
	 left: 50%;
	 top: 50%;
	 width: 300%;
	 height: 300%;
	 transform-origin: 0 0;
}
 .demo__colored-block:nth-child(3) {
	 transform: rotate(0deg) skewX(-30deg);
	 background-color: #fd3359;
}
 .demo__colored-block:nth-child(2) {
	 transform: rotate(120deg) skewX(-30deg);
	 background-color: #f4d302;
}
 .demo__colored-block:nth-child(1) {
	 transform: rotate(240deg) skewX(-30deg);
	 background-color: #21bdff;
}
 .demo__inner {
	 overflow: hidden;
	 position: relative;
	 width: 100%;
	 height: 100%;
}
 .demo__numbers {
	 overflow: visible;
	 position: absolute;
	 left: 50%;
	 top: 50%;
	 width: 100px;
	 height: 100px;
	 margin-left: -50px;
	 margin-top: -50px;
}
 .demo__numbers-path {
	 fill: none;
	 stroke-width: 10px;
	 stroke: #fff;
	 stroke-linecap: round;
	 stroke-linejoin: round;
	 stroke-dasharray: 0, 518.055065155;
	 stroke-dashoffset: 0;
	 animation: numAnim 4s ease-in-out infinite;
	 opacity: 0;
}
 .demo__text {
	 position: absolute;
	 left: 50%;
	 top: 0;
	 width: 500px;
	 height: 100%;
	 margin-left: -250px;
	 text-align: center;
	 line-height: 140px;
	 font-size: 100px;
	 color: #fff;
	 text-transform: uppercase;
	 letter-spacing: 15px;
	 transform: translateX(10px);
	 animation: hideText 4s infinite;
}
 @keyframes contAnim {
	 15%, 100% {
		 margin-left: -250px;
		 width: 500px;
	}
	 25%, 90% {
		 margin-left: -70px;
		 width: 140px;
	}
}
 @keyframes numAnim {
	 15% {
		 stroke-dasharray: 0, 518.055065155;
		 stroke-dashoffset: 0;
		 opacity: 0;
	}
	 25%, 41% {
		 opacity: 1;
		 stroke-dasharray: 144.4256591797, 518.055065155;
		 stroke-dashoffset: -40;
	}
	 53%, 66% {
		 stroke-dasharray: 136.0216217041, 518.055065155;
		 stroke-dashoffset: -227.238697052;
	}
	 76% {
		 stroke-dasharray: 113.4751205444, 518.055065155;
		 stroke-dashoffset: -445.8995704651;
	}
	 88%, 100% {
		 stroke-dasharray: 72.1554946899, 518.055065155;
		 stroke-dashoffset: -445.8995704651;
	}
	 92% {
		 opacity: 1;
	}
	 100% {
		 opacity: 0;
	}
}
 @keyframes rotation {
	 to {
		 transform: rotate(360deg);
	}
}
 @keyframes demoAnim {
	 15% {
		 border-radius: 20px;
		 transform: rotate(0);
	}
	 30%, 43% {
		 border-radius: 50%;
		 transform: rotate(360deg);
	}
	 52%, 65% {
		 border-radius: 0;
		 transform: rotate(720deg);
	}
	 78%, 90% {
		 border-radius: 50%;
		 transform: rotate(1080deg);
	}
	 100% {
		 border-radius: 20px;
		 transform: rotate(1440deg);
	}
}
 @keyframes hideText {
	 15%, 100% {
		 opacity: 1;
	}
	 20%, 96% {
		 opacity: 0;
	}
}
 </style>


<style>
/*BEGIN General Classes for demo page*/
body
{
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
  font-size: 42px;
  
}

.demo_wrapper
{
  
  
  width: 100%;
  height: 4em;
  
  justify-content: space-around;
  
}
/*END General Classes for demo page*/
/*BEGIN normal close button Classes*/
.container
{
  
  position: relative;
  width: 58em;
  height: 4em;
}
.container:before
{
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 0;
  width: 0;
  border: 1em solid rgba(100,100,100,0.8);
  border-radius: 6em;
  transition: all 0.2s ease-in-out;
}
.close_icon
{
  transition: all 0.075s ease-in-out;
  position: absolute;
  width: 2em;
  height: 2em;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  border: 0.1em solid;
  border-color: rgb(14, 162, 189);
  border-radius: 6em;
  
}
.close_icon:after
{
  transition: all 0.075s ease-in-out;
  font: 1em Helvetica, arial;
  font-size: 1em;
  width: 100%;
  height: 100%;
  content:"x";
  color: rgba(250,250,250,0.8);
  display: flex;
  justify-content: center;
  align-items: center;
  transform: translate(0,-5%) scale(1.25,1);
}
/*BEGIN Third Close button Spin animations*/
.container.spin:before
{
  animation: container_spin_back 0.2s ease-in-out forwards;
}
.close_icon.spin
{
  animation: icon_spin_back 0.2s ease-in-out forwards;
}

.container.spin:hover:before
{
  animation: container_spin 0.2s ease-in-out forwards;
}
.container.spin:hover .close_icon.spin
{
  animation: icon_spin 0.2s ease-in-out forwards;
}

.container.spin:active:before
{
  animation: container_spin_double 0.2s ease-in-out forwards;
}
.container.spin:active .close_icon.spin
{
  animation: icon_spin_double 0.2s ease-in-out forwards;
  border-color: rgba(50,50,50,0.8);
}
.container.spin:active .close_icon.spin:after
{
  color: rgba(50,50,50,0.8);
}
@keyframes container_spin
{
  0%{border-color: rgb(14, 162, 189);}
  50%{border-left-width: 0;
  border-right-width:  0;
  border-color: rgb(14, 162, 189);}
  100%{border-color: rgb(14, 162, 189);;}
}
@keyframes container_spin_back
{
  0%{border-color: rgb(14, 162, 189);;}
  50%{border-left-width: 0;
  border-right-width:  0;
  border-color: rgb(14, 162, 189);;}
  100%{border-color: rgb(14, 162, 189);;}
}
@keyframes container_spin_double
{
  0%{border-color: rgb(14, 162, 189);;}
  50%{border-left-width: 0;
    border-right-width:  0;
    border-color: rgb(14, 162, 189);;}
  100%{border-color: rgb(14, 162, 189);;}
}
@keyframes icon_spin
{
  50%{width: 0;}
}
@keyframes icon_spin_back
{
  50%{width: 0;}
}
@keyframes icon_spin_double
{
  50%{width: 0;}
}
/*END Third Close button Spin animations*/
</style>











<div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
</div>