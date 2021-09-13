

<!DOCTYPE html>
<html>
<head>
	<title>Animal Information</title>
	<style type="text/css" >
		
		input[type=text]
		{
			 width: 100%;
  			padding: 12px;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
  			resize: vertical;
		}
		input[type=password]
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

		
					
			
		
		<h1>Login form</h1>

			<div class="row" >
			<div class="label" >
			<label for="username" >UserName</label>
			</div>
			<div class="input" >
			<input type="text" name="username" class="form-control " required="required">
			</div>
			</div>	
			
			<div class="row" >
			<div class="label" >
			<label for="password" >Password</label>
			</div>
			<div class="input" >
			<input type="password" name="password" class="form-control " required="required">
			</div>
			</div>	
			
			<input type="submit" name="submit">
		</form>

</div>
</body>
</html>