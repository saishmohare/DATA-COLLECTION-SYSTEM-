<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text\javascript">
$(document).ready(function(){
	$("#searchA1").keyup(function(){
		$("#here").show();
		var x=$(this).val();
		$.ajax({
			type:GET,
			url:'search.php',
			data:'q='+x,
			success:function(data){
				$("#here").html(data);
			},
		});
	});
	});
/*function searchq()
{
	var searchTxt=$("input[name='search']").Val();
	$.post("search.php",{searchVal: searchTxt},function(output){
		$("#output").html(output);
		$.ajax({
			type:GET,
			url='search.php',
			data:'q='+x,
			success:function(data){
				$("#here").html(data);
			}
		});
	});
}*/
</script>
</head>
<body>
<form>
<input type="text" name="search" placeholder="enter the name" id="search" autocomplete="off">
</form>
<div id="here"></div>
</body>
</html>