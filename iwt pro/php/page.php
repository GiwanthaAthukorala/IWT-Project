<?php 

$servername+ "localhost";
$username = "root";
$password = ""
$$dbname = "My DB"
$con=newmysqli("localhost","root"," ", "MyDB");

if($con->connect_error){
	die("Connection failed:".$con->connect_error);
}
?>

<?php 


<!-- product CRUD section starts  -->

<section class="add-Recipe">

   <h1 class="title">Recipe</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Recipe</h3>
  
      <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
      <input type="text" name="name"required<br/></br>
      <textarea name="recipe" rows="20" cols="100"></textarea>
  <br><br>
     
   </form>

</section>


if(isset($_POST['add_recipe'])){

   $image = $_FILES['image']['name'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $recipe = mysqli_real_escape_string($conn, $_POST['recipe']);
?>




<?php 

	$errors = array();

	if (isset($_POST['submit'])) {
		// submitt button is clicked

		$file_name = $_FILES['image']['name'];
		$file_type = $_FILES['image']['type'];
		$file_size = $_FILES['image']['size'];
		$temp_name = $_FILES['image']['tmp_name'];

		$upload_to = 'images/';

		// checking the file type
		if ($file_type != 'image/jpeg') {
			$errors[] = 'Only JPEG files are allowed.';
		}

		// checking file size
		if ($file_size > 500000) {
			$errors[] = 'File size should be less than 500kb.';
		}
		
		if (empty($errors)) {
			$file_uploaded = move_uploaded_file($temp_name, $upload_to . $file_name);
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Image Upload</title>
	<style>
	
		.errors { color: red; margin-bottom: 20px; }
	</style>
</head>
<body>


		<?php 
			if (!empty($errors)) {
				echo '<div class="errors">';
				echo '<b>File not uploaded. Check following errors:</b><br>';
				foreach ($errors as $error) {
					echo '- ' . $error;
				}
				echo '</div>';
			}

		 ?>
		 
		<?php 
			if (isset($file_uploaded)) {
				echo '<h3>Uploaded File</h3>';
				echo '<img src="' . $upload_to . $file_name . '" style="height:200px">';
			}

		 ?>

   

<section class="show-recipe">

   <div class="box-container">

      <?php
         $select_recipe = mysqli_query($conn, "SELECT * FROM `recipe``") or die('query failed');
         if(mysqli_num_rows($select_recipe) > 0){
            while($fetch_recipe = mysqli_fetch_assoc($select_recipe)){
      
	  ?>
      <div class="box">
         <img src=""<?php echo $fetch_recipe['image']; ?>" alt="" style="width: 100%;"\>
         <div class="name"><?php echo $fetch_recipe['name']; ?></div>
		 <div class="recipe"><?php echo $fetch_recipe['recipe']; ?></div>
       
       
      </div>


</section>

<?php
if(isset($_POST['update_recipe'])){

   $update_image = $_POST['update_image'];
   $update_name = $_POST['update_name'];
   $update_recipe = $_POST['update_recipe']; ?>
   
   

</section>
</body>
</html>