
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
        <a  class="nav-link active" href="content_1_.php">Start</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="content_3_.php">Hello World</a>
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
<h3 style="color:blue">How to create a new project?</h3>
<br>
<p>Here are the steps to open and create a new project in Android Studio</p>
<p>
<ol type="1">

<li>Download and open Android Studio</li>
<ul type="circle" style="margin-left:-8px">
<li>Here is the download link for the latest version</li>
<li><a href="https://developer.android.com/studio/" >Android Studio</a></li>
</ul>

<li>In the <b>Welcome to Android Studio</b>click <b>Start a new Android Studio Project</b></li>
<img src="pics/welcome.png" width="100%" height="auto"  alt="Startup window" / >
<br>
<li>In <b>Create New Project</b> enter the follwing details</li>
<ul>
<li><b>Application Name:</b>"My First App"</li>
<li><b>Company Name:</b>"example.com"</li>
</ul>
<img src="pics/Capture.PNG" width="100%" height="auto" alt="Empty project" />
<br>
<li>Give the minimum API level. That means the project will run the devices which has a minimum API level you entered</li>
<img src="pics/Capture1.PNG" width="100%" height="auto" alt="Creating activity" />

</ol>
<br>
<p>First, be sure the Project window is open (select View > Tool Windows > Project) and the Android view is selected from the drop-down
 list at the top of that window. You can then see the following files:</p>
<p><b><i>app > java > com.example.myfirstapp > MainActivity:</i></b></p>
<p>This is the main activity (the entry point for your app). When you build and run the app, 
the system launches an instance of this Activity and loads its layout.</p>
<p><b><i>app > res > layout > activity_main.xml</i></b></p>
<p>This XML file defines the layout for the activity's UI. 
It contains a TextView element with the text "Hello world!".</p>
<p><b><i>app > manifests > AndroidManifest.xml</i></b></p>
<p>The manifest file describes the fundamental characteristics of the app and defines each of its components.</p>
<p><b><i>Gradle Scripts > build.gradle</i></b></p>
<p>You'll see two files with this name: one for the project and one for the "app" module. 
Each module has its own build.gradle file, but this project currently has just one module.
 You'll mostly work with the module's build.gradle file to configure how the Gradle tools compile and build your app.
 For more information about this file, see<a href="https://developer.android.com/studio/build/"> Configure Your Build</a>.</p>

</div>


<div class="col-md-6 " >
<h1 style="color:red">Fundamentals</h1>
<br>
<p>Android apps can be written using Kotlin, Java, and C++ languages.
The Android SDK tools compile your code along with any data and resource files into an APK, an Android package, which is an archive file with an .apk suffix.
One APK file contains all the contents of an Android app and is the file that
Android-powered devices use to install the app.</p>
<p>Each Android app lives in its own security sandbox, protected by the following Android security features:</p>

<ul >
<li>The Android operating system is a multi-user Linux system in which each app is a different user.</li>
<li>By default, the system assigns each app a unique Linux user ID
(the ID is used only by the system and is unknown to the app).
The system sets permissions for all the files in an app so that only the user
 ID assigned to that app can access them.</li>
 <li>Each process has its own virtual machine (VM), so an app's code runs in isolation from other apps.</li>
 <li>By default, every app runs in its own Linux process.
 The Android system starts the process when any of the app's components need to be executed,
 and then shuts down the process when it's no longer needed or when the system must recover memory for other apps.</li>
 </ul>

<br>
<h2 style="color:grey">App Component</h2>
<p>There are four types of app components</p>
<ul>
<li>Acivities</li>
<li>Services</li>
<li>Broadcast receivers</li>
<li>Content providers</li>
</ul>

<h4 style="color:blue">Activity</h4>
<p>An activity is the entry point for interacting with the user. It represents a single screen with a user interface. </p>
<p>An activity has following key features</p>
<ul>
<li>Keeping track of what the user currently cares about (what is on screen)
to ensure that the system keeps running the process that is hosting the activity.</li>
<li>Knowing that previously used processes contain things the user may return to (stopped activities),
 and thus more highly prioritize keeping those processes around.</li>
<li>Helping the app handle having its process killed so
  the user can return to activities with their previous state restored.</li>
</ul>
<br>
<h4 style="color:blue">Services</h1>
<p>A service is a general-purpose entry point for keeping an app running in the background for all kinds of reasons. It is a component that runs in the background to perform
long-running operations or to perform work for remote processes. A service does not provide a user interface.</p>
<p>For more information on services visit <a href="https://developer.android.com/guide/components/services">Services</a>.</p>
<br>
<h4 style="color:blue">Broadcast receivers</h4>
<p>A broadcast receiver is a component that enables the system to deliver events to the app outside of a
 regular user flow, allowing the app to respond to system-wide broadcast announcements. Because broadcast receivers are another well-defined entry into the app,
the system can deliver broadcasts even to apps that aren't currently running.</p>
<p>A broadcast receiver is implemented as a subclass of BroadcastReceiver and each
broadcast is delivered as an Intent object. For more information, see the
<a href="https://developer.android.com/reference/android/content/BroadcastReceiver">BroadcastReceiver class</a>.</p>
<br>
<h4 style="color:blue">Content Providers</h4>
<p>A content provider manages a shared set of app data that you can store in the file system, in a SQLite database, on the web, or on any other persistent storage location that your app can access.
Through the content provider, other apps can query or modify the data if the content provider allows it.</p>
<p>For more information please visit <a href="">Content provider</a>.</p>

</div>

</div>

<div class="jumbotron jumbotron-fluid" style="background-color:black;text-color:grey;margin-bottom:0 !important">
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