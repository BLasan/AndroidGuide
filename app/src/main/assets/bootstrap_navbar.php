<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Android Guide</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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
    transform: translate3d(-1px, 37px, 0px)!important;
}

.content{

	position:absolute;
	margin:10px;
	background-color:pink;

}

.blob-wrapper {
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    overflow-x: 20px;
    overflow-y: hidden;
}

.row {
    margin-left:0;
    margin-right:0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
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
              <a class="nav-link active" href="bootstrap_navbar.php">Introduction</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link" href="content_1_.php">Start</a>
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
              <a class="nav-link " href="snakePics.php">Simple Snake Game</a>
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
<h1 style="color:green;margin-left:16%">Android Studio Guide</h1>
 <br>
<div class="modal-body row" style="margin-right:0px !important;margin-left:0px !important">
<div class="col-md-6 " >

<h2 style="color:bue;">Introduction</h2>
<p >This web page contains about android technology. Now adays people use android mobile phones as they are easy to handle and
familiar to everyone.Smart phone technology changed the society and the mobile industry by competing and defeating the technology available in the past.
Also apple phones which uses IOS technology(platform) use by people rather than using android mobiles.</p>


<br>

<p style="font-size:20px;"><strong>Why i-phones are better than android phones?</strong></p>
<br>
<p >There are some reasons for this. Let's see briefly what are reasons for this.</p>
<p>
<ol>
<li>Much Faster</li>
<li>Better hardware and software integration</li>
<li>Easiest phone to use</li>
<img src="pics/apple.jpg" style="margin-left:-50px;width:100%;height:auto"  alt="apple phone" / >
<br>
<li>OS updates when you want them</li>
<li>The best app first</li>
</ol>
</p>
<p >For more details please visit the following link:</p>
<a href="https://www.quora.com/Android-operating-system-Is-iOS-better-than-Android-and-Windows-Phone" style="color:purple;width:100%">IOS better than Android</a>
<br><br>
<p style="font-size:20px"><u><strong>History of android version</u></strong></p>
<p>The version history of the <u style="color:blue">Andoid mobile operating system</u> began with the public release of the Android beta on November 5,2007.
As the first commercial version Android 1.0 was released on September 23,2008. Android was continually developed by Google and Open Handset Alliance. And
it had a number of updates since its first version was released. Versions 1.0 and 1.1 were not released under specific code names,although Android 1.1 was
unofficially known as Pertit Four. Android code names are confectionery-themed and have been in alphabetical order since 2009's Android 1.5 CupCake. The
most recent version of Android is Android 9 Pie,which was released in August 2018.
</p>
<br>
<img src="pics/data.png" width="100%" height="auto"/>
<br>
</div>
<div class="col-md-6 ">

<h2 style="color:red">ANDROID OPERATING SYSTEMS</h2>

<br>

<table class="table table-dark ">
  <thead>
    <tr>
      <th scope="col" style="padding:0rem !important">OS</th>
      <th scope="col" style="padding:0rem !important">Version Number</th>
      <th scope="col" style="padding:0rem !important">Released Date</th>
      <th scope="col" style="padding:0rem !important">API level</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">No name</th>
      <td>1.0</td>
      <td>September 23,2008</td>
      <td>1</td>
    </tr>
    <tr>
      <th scope="row">Petit Four</th>
      <td>1.1</td>
      <td>February 9,2009</td>
      <td>2</td>
    </tr>
    <tr>
      <th scope="row">CupCake</th>
      <td>1.5</td>
      <td>April 27,2009</td>
      <td>3</td>
    </tr>
	<tr>
      <th scope="row">Donut</th>
      <td>1.6</td>
      <td>September 15,2009</td>
      <td>4</td>
    </tr>
	<tr>
      <th scope="row">Eclair</th>
      <td>2.0-2.1</td>
      <td>October 26,2009</td>
      <td>5-7</td>
    </tr>
	<tr>
      <th scope="row">Gingerbread</th>
      <td>2.3-2.3.7</td>
      <td>December 6,2010</td>
      <td>9-10</td>
    </tr>
	<tr>
      <th scope="row">Ice Cream Sandwich</th>
      <td>4.0-4.0.4</td>
      <td>October 18,2011</td>
      <td>14-15</td>
    </tr>
	<tr>
      <th scope="row">Jelly Bean</th>
      <td>4.1-4.3.1</td>
      <td>July 9,2012</td>
      <td>16-18</td>
    </tr>
	<tr>
      <th scope="row">KitKat</th>
      <td>4.4-4.4.4</td>
      <td>October 31,2013</td>
      <td>19-20</td>
    </tr>
	<tr>
      <th scope="row">Lollipop</th>
      <td>5.0-5.1.1</td>
      <td>November 12,2014</td>
      <td>21-22</td>
    </tr>
	<tr>
      <th scope="row">Marshmallow</th>
      <td>6.0-6.0.1</td>
      <td>October 5,2015</td>
      <td>23</td>
    </tr>
	<tr>
      <th scope="row">Oreo</th>
      <td>8.0-8.1</td>
      <td>August 21,2017</td>
      <td>26-27</td>
    </tr>
	<tr>
      <th scope="row">Pie</th>
      <td>9.0</td>
      <td>August 6,2018</td>
      <td>28</td>
    </tr>

  </tbody>
</table>
<div class="panel-footer">From-<a href="https://en.wikipedia.org/wiki/Android_version_history">Android Versions</a></div>
<br>
<img src="pics/Android.jpg" style="width:100%;height:auto"/>

</div>
</div>

<div class="jumbotron jumbotron-fluid" style="background-color:black;text-color:grey;">
  <div class="container">
    <p class="lead">email-benuraab@gmail.com.</p>
    <p class="lead">Contact-+94713405414</p>
  </div>
</div>


<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->


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



<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>