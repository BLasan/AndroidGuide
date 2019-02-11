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
        <a class="nav-link active" href="content_7_.php">Sqlite with android</a>
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

<h3 style="color:grey">Types of DBMS</h3>
<br>

<ul>
<li>SQL/MY SQL</li>
<li>Sqlite</li>
<li>Oracle</li>
<li>MS Access</li>
<li>dBase</li>
<li>FoxPro</li>
</ul>
<br>
<h3 style="color:grey">About Sqlite</h3>
<br>
<p>SQLite is an in-process library that implements a self-contained, serverless, zero-configuration, 
transactional SQL database engine. The code for SQLite is in the public domain and is thus free for use for any purpose, commercial or private. SQLite is the most widely deployed database
 in the world with more applications than we can count, including several high-profile projects.</p>
<p>SQLite is an embedded SQL database engine. Unlike most other SQL databases, 
SQLite does not have a separate server process. SQLite reads and writes directly to ordinary disk files.
A complete SQL database with multiple tables, indices, triggers, and views, is contained in a single disk file.
The database file format is cross-platform - you can freely copy a database between 32-bit and 64-bit systems or
between big-endian and little-endian architectures. These features make SQLite a popular choice as an Application
File Format. SQLite database files are a recommended storage format by the US Library of Congress. 
Think of SQLite not as a replacement for Oracle but as a replacement for fopen().</p>
<p>SQLite is file-based — the database consists of a single file on the disk, which makes it extremely 
portable and reliable. Although it might appear like a “simple” DB implementation, SQL is used in SQLite. 
SQLite is meant to be great for both developing and testing and offers more than what is needed for development.</p>
<br>
<h3 style="color:grey">Disadvantages of using Sqlite</h3>
<ul>
<li><b>No user management:</b> Advanced databases make user support a high priority. SQLite doesn’t support such features.</li>
<li><b>Can't tinker for increased performance:</b> As far as the design is concerned,
 SQLite lacks the ability to tinker with it to squeeze out higher performance. 
 The library is absolutely simple to tune and use — it isn't complicated,
 but, as a result, you can't really tweak it further.</li>
 <li><b>Reliability:</b> And as far as design is concerned, MySQL doesn’t intend to do everything,
  but it measures up to the functional expectations that some state-of-the-art apps require.
   MySQL is a little less reliable than RDBMSs.
  MySQL is an open source product, but there are complaints about the development process. </li>
</ul>
<br>
<h3 style="color:grey">When to use Sqlite?</h3>
<br>
<ul>
<li>All applications that require portability and don’t require expansion.</li>
<li>In cases where applications need to read or write files to disk directly.</li>
</ul>
<br>
<h3 style="color:grey">When to use MySql?</h3>
<ul>
<li>Where high-security features are required for data access.</li>
<li>For websites that work on MySQL despite some constraints. It's a scalable tool that is easy to manage.</li>
</ul>
</div>
<div class="col-md-6 " >
<h3 style="color:grey">How to connect sqlite to Android Studio?</h4>
<br>
<p>There are many ways to connect sqlite to Android Studio. But i'm mentioning an easy way that worked with me</p>
<br>
<img src="pics/Capture10.PNG" alt="sqlite" width="100%" height="auto"/>
<br><br>
<p style="color:blue">Here the database file has been opened for Read and Write purposes. The openorcreatedatabase method
used to open an existing database file or create a database file and open it. The database files which created with the
above method will be added to the data files of the emulator which you have connected/run.</p>
<br>
<p>You can see the database created using the above method by visiting following path</p>
<ul>
<li><b>View->Tools Window->Device File Explorer</b></li>
</ul>
<br>
<img src="pics/Capture12.PNG" alt="Device file explorer" width="100%" height="auto"/>
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
