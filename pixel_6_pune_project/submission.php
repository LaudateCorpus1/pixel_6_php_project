<!DOCTYPE html>
<html>
<head>
	<title>Animal Information</title>
	<style type="text/css" >
		
		input[type=text],select,textarea
		{
			 width: 100%;
  			padding: 12px;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
  			resize: vertical;
		}
		label 
		{
  		padding: 12px 12px 12px 0;
  		
		}
		input[type=submit]
		 {
  				background-color: #04AA6D;
  				color: white;
 				 padding: 12px 20px;
 				 border: none;
 				 border-radius: 4px;
 				 margin-left: 200px;
 				 margin-top:10px;
  				text-align: center;

		}
		.label
		{
			float: left;
			width: 25%;
			margin-top: 16px;
		}
		.input
		{
			float: left; 
			width: 75%; 
			margin-top: 16px;
		}
		@media screen and (max-width: 600px) 
		{
  			.label, .input, input[type=submit] {
    		width: 100%;
    		margin-top: 0;
  }
		

	</style>
</head>
<body>

<div class="container-fluid" style="border-radius:5px;background-color:#f2f2f2;padding:25px;display:inline-block;height:auto;margin-left:300px;margin-top:100px;width:50%;position:fixed;">		
		<form method="post" action="animals.php" enctype="multipart/form-data">		
		
		<h1>Animal Information form</h1>

			<div class="row" >
			<div class="label" >
			<label for="name" >Name</label>
			</div>
			<div class="input" >
			<input type="text" name="animal_name" class="form-control " required="required">
			</div>
			</div>	
			
			<div class="row">
			<div class="label" >
				<label for="category">Category</label>
			</div>
			<div class="input" >
				<select id="Category" name="category">
				<option value="herbivores">--Select types--</option>
				<option value="herbivores">Herbivores</option>
				<option value="Omnivores">Omnivores</option>
				<option value="Carnivores">Carnivores</option>
				</select>
			</div>
			</div>
			

			<div class="row">
			<div class="label" >
			<label for="img" >Select image:</label>
			</div>
			<div class="input" >
			<input type="file" id="img " name="img">
			</div>
			</div>


			<div class="row">
			<div class="label" >
			<label for="description">Description</label>
			</div>
			<div class="input" >
			<textarea id="description" name="description"size="30" required="required">Description</textarea>
			</div>
			</div>


			<div class="row">
			<div class="label" >
				<label for="category">Life expentency</label>
			</div>
			<div class="input" >
				<select id="Life_expentency" name="life">
				<option value="life">--Select types--</option>
				<option value="0-1">0-1 year</option>
				<option value="1-5">1-5 year</option>
				<option value="5-10">5-10 year</option>
				<option value= "10+">10+ year</option>
				</select>
			</div>
			</div>

			<?php

				//generate maths captcha
				$min_number = 1;
				$max_number = 15;

				$random_number1 = mt_rand($min_number, $max_number);
				$random_number2 = mt_rand($min_number, $max_number);
				echo "Resolve simple captcha code   ";
				echo $random_number1 . ' + ' . $random_number2 . ' = ';
			?>
			<input name="captchaResult" type="text" / style="width: 20%;
  			padding: 10px;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
  			resize: vertical;
  			margin-top:16px;">

			<input type="submit" name="search">
			<input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
			<input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />

		</form>

</div>
</body>
</html>