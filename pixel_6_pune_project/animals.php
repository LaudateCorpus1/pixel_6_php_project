<?php

require_once('connection.php');

//when user submit login form control goes here to store login details and display data from animal_info table to webpage order by name of animal alphabetically.
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$insert=$mysqli->query("INSERT INTO login (username,password)VALUES ('$username','$password')") or die($mysqli->error);

	$query="select * from animal_info ORDER BY name ASC;";
 // Fetch all the records from the table address
	$result=mysqli_query($mysqli,$query);


}
	//display total visitors count
	$query="select * from login";
	$res=mysqli_query($mysqli,$query);
 // count all the records from the table login
	$row=mysqli_num_rows($res);
	echo "There are " . $row . " visitors.";



//when animal_info form submitted then control goea here
if(isset($_POST['search']))//when click on submit button
{
	$name=$_POST['animal_name'];//get all input names and stored in database table
	$category=$_POST['category'];
	//save image in database
	$name=$_FILES['img']['name'];//use file method to store image
	$tmp_name=$_FILES['img']['tmp_name'];//copy image name

	//echo($name);
	//print_r($name);
	//echo($tmp_name);
	$img='image/'.$_FILES['img']['name'];//give folder path to store image
	//$folder="image/".$img;
	move_uploaded_file($tmp_name,$img);//upload image in image folder with same name as while uploading
	$description=$_POST['description'];

	//life expentancy
	$life=$_POST['life'];

	//check captch code
	$captchaResult = $_POST["captchaResult"];//user enter captcha result aceess by post method
	$firstNumber = $_POST["firstNumber"];
	$secondNumber = $_POST["secondNumber"];
	$checkTotal = $firstNumber + $secondNumber;//calculate first two number total by computer

	//check user enter total is eqaul to total calculated by computer if match echo correct captcha
	if ($captchaResult == $checkTotal) {
	echo "correct captcha";
	} else {
		echo "incorect captcha";
	}
	
	//insert animal inforamtion form data in database table i.e animal_info
	$insert=$mysqli->query("INSERT INTO animal_info (name,category,img,description,life)VALUES ('$name','$category','$img','$description','$life')") or die($mysqli->error);

	$query="select * from animal_info ORDER BY name,date_of_submission ASC"; // Fetch all the records from the table animal_info order by name
	$result=mysqli_query($mysqli,$query);



}

//filter table data by category wise

if(isset($_POST['save']))
{
	$category=$_POST['category'];
	$life=$_POST['life'];
	echo $category;
	echo $life;

	$query="select * from animal_info where category LIKE '%".$category."%' AND life LIKE '%".$life."' ORDER BY name ASC"; // filter all the records from the animal_info table as per category and life  expentency order by name alphabetically
	$result=mysqli_query($mysqli,$query);
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid rgb(0, 0, 0);
   }
   th, td {
      text-align: left;
      padding: 8px;
   }

	</style>
</head>
<body>

<form method="post" action="animals.php">
<select for="categories" name="category">
	
	<option value="herbivores">Herbivores</option>
	<option value="carnivores">Carnivores</option>
	<option value="omnivores">Omnivores</option>
</select>

<select for="life" name="life">
	
	<option value="0-1">0-1</option>
	<option value="1-5">1-5</option>
	<option value="5-10">5-10</option>
	<option value="10+">10+</option>

</select>
<input type="submit" name="save">

</form>


<h3> Page to display the stored data </h3>

<table border="1">
<tr>
<th>ID</th>
<th> NAME </th>
<th> Category </th>
<th> Image</th>
<th> description</th>
<th> life expentancy</th> 

<?php


$id=1;
	if(!empty($result)){
 while($array=mysqli_fetch_row($result))
 {
 	
?>
<tr>
<td><?php echo $id++;?></td>
<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><img src="<?php echo $array[3]; ?>" width="100" height="100"></td>
<td><?php echo $array[4];?></td>
<td><?php echo $array[5];?></td>
</tr>
<?php } }else {?>

	<td colspan="6" style="text-align: center;">NO Information avilbale</td>


<?php } ?>

<?php mysqli_close($mysqli); ?>


</table>


</body>
</html>