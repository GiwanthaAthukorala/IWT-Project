<!DOCTYPE html>
<html>
  
<head>
	
	
	<script = "text/javascript">
	function validateForm() {
  let x = document.forms["myForm"]["recipe"].value;
  if (x == "") {
    alert("Recipe must be filled out");
    return false;
  }
}

</script>
</head>
</html>