<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script  type="text/javascript" src="../js/typeahead/0.11.1/typeahead.bundle.js"></script>
<link rel="stylesheet" href="A:\Programming Files\bootstrap-3.3.7-dist\bootstrap-3.3.7-dist\css\bootstrap.css">
<script type="text/javascript">
$(document).ready(function()
{
    // Defining the local dataset
    var names = ['Vijay','Asutosh','Saish','Karan','Adheesh','Varun','Om','Arvind','Sanyam','Ajay','Deepak'];
    
    var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;
    // an array that will be populated with substring matches
    matches = [];
    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });
    cb(matches);
  };
};
$('#bs-example.typeahead tt-query').typeahead tt-query({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'names',
  source: substringMatcher(names)
});
</script>
<style type="text/css">
body{
background-color:#007980;
}
.Search a:hover
{
	background-color: #8b5b85;
	opacity: 0.8;
	transition: 0.2s;
	padding: 10px 18px;
}
.Search a
{
	background-color: #8b5b85;
	color: white;
	padding: 10px 16px;
	border-radius: 5px;
	position: absolute;
	right: 50px;
	overflow: none;
	margin-top: -10px;
}
#header
{
	width: 50px;
	height: 70px;
	float: left;
}
.bs-example,.bs {
	font-family: sans-serif;
	position: relative;
	margin: 60px;
}
.typeahead, .tt-query, .tt-hint,.tt {
	border: 2px solid #CCCCCC;
	border-radius: 5px;
	font-size: 22px;
	height: 30px;
	line-height: 30px;
	outline: medium none;
	padding: 8px 12px;
	width: 396px;
}
.typeahead,.tt {
	background-color: #FFFFFF;
}
.typeahead:focus,.tt:focus {
	border: 2px solid #0097CF;
}
.tt-query,.tt {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint,tt-hint {
	color: #999999;
}
.tt-menu,.tt-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 8px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 12px;
	padding: 8px 0;
	width: 422px;
}
.tt-suggestion,.tt-suggestion {
	font-size: 22px;  /* Set suggestion dropdown font size */
	padding: 3px 20px;
}
.tt-suggestion:hover,.tt-suggestion:hover {
	cursor: pointer;
	background-color: #0097CF;
	color: #FFFFFF;
}
.tt-suggestion p,.tt-suggestion-p {
	margin: 0;
}
</style>
</head>
<body>
<center>
<div id="header">
<img src="logo.jpeg">
</div>
    <div class="bs-example">
		<h2>Type the Student Name </h2>
        <input type="text" name ="fname" class="typeahead tt-query" placeholder="enter the name" list="names" autocomplete="off">
		<datalist id="names">
  <option value="Varun Rathi">
  <option value="Saish Mohare">
  <option value="Vijay sahani">
  <option value="Asutosh padhi">
  
</datalist>
	</div>
	<h3>OR</h3>
	<div class="bs">
		<h2>Type the Student Roll No</h2>
	<input type="text" class="tt"  placeholder="enter the roll no" autocomplete="off">
	</div>
	<div class="Search">
	<a href="#" action="#" method="POST" color="white">Search Here</a>
	</div>
</center>
</body>
</html>                                		