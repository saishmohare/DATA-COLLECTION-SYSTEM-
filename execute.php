<!DOCTYPE html>
<html>
<head>
<script type="text\javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" </script>
<script type="text\javascript">
function searchq()
{
	var searchTxt=$("input[name='search']").val();
	$.post("search.php",{searchVal: searchTxt},function(output){
		$("#output").html(output);
	});
}
</script>
</head>
<body>
<form action="#" method="post">
<input type="text" name="search" placeholder="enter the name" autocomplete="on" onkeydown="searchq();"/>
<input type="submit" value=">>"/> 
</form>
<div id="output"></div>
</body>
</html>