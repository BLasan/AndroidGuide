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
        <a class="nav-link " href="content_5_.php" >SDK Tools</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="content_7_.php">Sqlite with android</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link active" href="content_9_.php">Firebase with Android</a>
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
<h3 style="color:grey">What is Firebase?</h3>
<br>
<p>Firebase is a kind of database that mostly  in use to store data now adays. It is widely used in Android Studio
in order to store data of a particular activity. It can be also used in web developing to store data and create a database.
In this section we will consider about How to create a database in firebase console and How to use it in Android Studio</p>
<br>
<h3 style="color:grey">How does the firebase database work?</h3>
<br>
<ol>
<li>Connect your app to Firebase. Install the Firebase SDK. </li>
<li>Add the Realtime Database to your app. 
Add the dependency for Realtime Database to your app-level build.gradle file:</li>
<li>Configure Firebase Database Rules.</li>
<li>Write to your database.</li>
<li>Read from your database</li>
<li>Optional: Configure ProGuard</li>
<li>Prepare for launch</li>
<li>Next Steps</li>
</ol>
<br>
<h3 style="color:grey">How to create a firebase project</h3>
<br>
<ol>
<li>Go to Firebase console</li>
<img src="pics/Capture13.PNG" alt="firebase console" width="100%" height="auto"/>
<br>
<li>Click "Add project"</li>
<img src="pics/Capture14.PNG" alt="firebase project" width="100%" hright="auto"/>
<br>
<li>The "Create a project" window opens.</li>
<br>
<p>Enter the following information and click "CREATE PROJECT".</p>
<br>
<ul>
<li>Project name</li>
<li>Enter <b>PushTest</b>. This is the project name of your app in the Firebase console.</li>
<li>Country/Region</li>
</ul>
<br>
<img src="pics/pro.png" alt="project window" width="100%" height="auto"/>
<li>The start screen of the Firebase console opens.</li>
<br>
<p>Click "Add Firebase to your Android app".</p>
<img src="pics/pro1.png" alt="project window" width="100%" height="auto"/>
<li>The "Enter app details" screen opens.</li>
<br>
<p>Enter the package name of the mobile app here. Specify the package name specified when you created the project in Android Studio.
 It is <b>com.example.pushtest</b> in this tutorial.</p>
<br>
<p>You can omit the app nickname and the debug signing certificate SHA-1
 if you use only the FCM feature. Otherwise, follow the on-screen instruction.</p>
<br>
<p>Click "ADD APP" after specifying the app details.</p>
<img src="pics/pro2.png" alt="project window" width="100%" height="auto"/>
<br>
<li>Continue the configuration by following the on-screen instruction.</li>
<br>
<ul>
<li>The "Copy config file" screen downloads the google-services.json file to your machine 
as soon as the screen opens. You will set up the google-services.json file in Android Studio.</li>
<li>Ignore the instruction to modify the build.gradle file because the modification instructed on the 
screen will cause a build error. We will modify the build.gradle file in a later step.</li>
</ul>
<li>Check the server key after the project is created.</li>
<br>
<p>First, select "Settings" from the project menu to open the "Settings" screen.</li>
<br>
<img src="pics/pro3.png" alt="project window" width="100%" height="auto"/>
</ol>
</div>

<div class="col-md-6 " >
<h3 style="color:grey">How to connect firebase to Android Studio?</h3>
<br>
<p>Let's see how to connect firebase to Android Studio</p>
<br>
<p>First make sure you have installed Google Repository version 26 or higher, using the following steps:></p>
<br>
<ul>
<li><b>Click Tools > SDK Manager.</b></li>
<li>Click the<b> SDK Tools</b> tab.</li>
<li>Check the <b>Google Repository</b> checkbox, and click <b>OK</b>.</li>
<li>Click OK to install.</li>
<li>Click <b>Background</b> to complete the installation in the background,
 or wait for the installation to complete and click<b> Finish.</b></li>
 </ul>
 <br>
<p>You can now open and use the Assistant window in Android Studio by following these steps:</p>
<ul>
<li>Click Tools > Firebase to open the Assistant window.</li>
<li>Click to expand one of the listed features (for example, Analytics),
then click the Get Started tutorial to connect to Firebase and add the necessary code to your app.</li>
</ul>
<br>
<p>For more information about using Firebase services, see the<a href="https://firebase.google.com/docs/">
 Firebase documentation</a>.</p>
<br>
<img src="pics/Capture15.PNG" alt="firebase" width="100%" height="auto"/>
<br><br>
<p>Edit the gradle app file as follow</p>
<br>
<img src="pics/Capture16.PNG" alt="gradle.app" width="100%" height="auto"/>
<br><br>
<p>Edit project gradle file as follow</p>
<br>
<img src="pics/Capture17.PNG" alt="gradle.project" width="100%" height="auto"/>
<br><br>
<p>Add these codes in the activity you want</p>
<img src="pics/Capture18.PNG" alt="code snippets" width="100%" height="auto"/>
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
