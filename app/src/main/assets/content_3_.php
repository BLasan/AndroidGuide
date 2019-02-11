
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Android Guide</title>
	<link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.min.css" />

<style type="text/css">
	ul.mr-auto{
		margin-right: 0px !important;
		margin-left: auto;	}

.menu  {
  width: 30px;
  height: 2px;
  background-color: black;
  margin: 6px 0;
  margin-left:-2px
}

.mystyle {
  width: 100%;
  padding: 25px;
  background-color: coral;
  color: white;
  font-size: 25px;
  box-sizing: border-box;
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.dropdown-menu{
    transform: translate3d(-1px, 33px, 0px)!important;
}


.content{

	position:absolute;
	margin:10px;
	background-color:pink;

}


a:link {
  color: green;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: red;
}

/* selected link */
a:active {
  color: yellow;
}


.table td, .table th {
    padding: 0rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

</style>
</head>
<body style="background-color:lightgrey">
<div class="modal-body row" style="padding:0rem !important">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="overflow:hidden">
  <div id="myDIV">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link " href="bootstrap_navbar.html">Introduction</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="content_1_.php">Start</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link active" href="content_3_.php">Hello World</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="content_5_.php">SDK Tools</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="content_7_.php">Sqlite with android</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="content_9_.php">Firebase with Android</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="snakePics.php">Simple Snake Game</a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
</div>
<br><br>


<div class="modal-body row" style="margin-right:0px !important;margin-left:0px !important">
<div class="col-md-6 " >
<h4 style="color:grey">Let's create a simple app that shows the messsage "Hello World!"</h4>
<br>
<ol>
<li>Open Android Studio</li>
<li>Create a new project and name it a s Hello World</li>
<li>After creating the project you'll see the following window</li>
<img src="pics/Capture2.PNG" alt="Android screen" width="100%" height="auto" />
<p>In the latest version of Android Studio the design view does't show the <b><i>Action Bar</i></b>.But it'll
appear in the emulator</p>
<p>Design view and Text view use to build the interface of the app. We can either create the interface using Text view or
Design view. But both doing the same task.</p>
<br>
<li>You can change the size,colour and various attributes of the tools you use to build from the bar which appears in 
the right size corner of the following picture.</li>
<img src="pics/Capture3.PNG " alt="Attributes" width="100%" height="auto" />
<br>
<li>Following is the <b>MainActivity</b> of the Hello World app</li>
<img src="pics/Capture4.PNG" alt="MainActivity" width="100%" height="auto">
<br>
<li>Run acitivity</li>
<img src="pics/Capture5.PNG " alt="Run" width="100%" height="auto" />
<li>Choose the virtual device to run the app</li>
<img src="pics/Capture6.PNG " alt="Virtual device" width="100%" height="auto" />
</ol>
</div>

<div class="col-md-6 " >
<h4 style="color:grey">Creating a virtual evice</h4>
<br>
<p>Tools->AVD Manager->Create Virtual Device</p>
<br>
<img src="pics/Capture7.PNG" alt="Virtual device" width="100%" height="auto" />
<br>
<p>You can create a virtual device in another way</p>
<p><b>Run->Create New Virtual Device</b></p>
<br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pics/Capture8.PNG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pics/Capture7.PNG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="pics/Capture9.PNG" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<p><b>Run on the emulator</b></p>
<ul>
<li>You can connect an external device and run on that</li>
<li>You can create a virtual device and run on that</li>
</ul>
<br>
<img src="pics/Emulator.png" alt="Emulator" width="100%" height="auto"/>

</div>
</div>

<div class="jumbotron jumbotron-fluid" style="background-color:black;text-color:grey;">
  <div class="container">
    <p class="lead">email-benuraab@gmail.com.</p>
    <p class="lead">Contact-+94713405414</p>
  </div>
</div>



<!-- <script src="js1.js" ></script> -->

<script
        src="jquery-3.3.1.min.js">
       </script>

<script src="js1.js" ></script>
<script src="bootstrap-4.2.1-dist/js/bootstrap.min.js" ></script>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("nav-link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
</body>
</html>