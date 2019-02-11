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
        <a class="nav-link" href="content_3_.php">Hello World</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link active" href="content_5_.php" >SDK Tools</a>
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

<h4 style="color:blue">What are Android SDK tools?</h4>
<br>
<p>A software development kit that enables developers to create applications for the Android platform. 
The Android SDK includes sample projects with source code,
 development tools, an emulator, and required libraries to build Android applications</p>

<br>
<h4 style="color:blue">What is SDK version in Android?</h4>
<br>
<p>API Level is an integer value that uniquely identifies the framework API revision
 offered by a version of the Android platform. The Android platform provides a framework API that applications can use
 to interact with the underlying Android system. The framework API consists of: A core set of packages and classes</p>
<br>
<h4 style="color:blue">What is MIN SDK?</h4>
<br>
<p>The min sdk version is the minimum version of the Android operating system required to run your application.
 The target sdk version is the version of Android that your app was created to run on.</p>
<br>
<h4 style="color:blue">What is the difference between SDK and JDK?</h4>
<br>
<p>The SDK for Java is called as JDK, the Java Development Kit. So by saying SDK for Java you are actually referring to the JDK. ... JRE is something
 that you need when you try to run software programs written in Java. Java is a platform independent language.</p>
 <br>
 <p style="color:red">Click here to download SDK tools</p>
 <br>
<a href="https://developer.android.com/studio/?gclid=CjwKCAiA7vTiBRAqEiwA4NTO6y6ukqjPHtaDerjw-TC5DytTleMhyx6ohCGpMUxdJhM8jFjFst1BLBoCposQAvD_BwE">
Download SDK
</a>
</div>
<div class="col-md-6 " >
h4 style="color:blue">Where can you get the latest SDK version</h4>
<p>Open SDK Manager</p>
<br>
<ul>
<li>In Android Studio go to<b> Tools > Android > SDK Manager > Appearance & Behavior > System Settings > Android SDK</b></li>
<li>Choose SDK tools lab</li>
<li>Select <b>Android SDK Build Tools</b> from the list</li>
<li>Check <b> Show Package Details</b></li>
</ul>
<br>
<img src="pics/web.png" alt="web" width="100%" height="auto" />

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