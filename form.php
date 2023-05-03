<?php
    $errors=[];
	if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==false) {
		$errors['email'] = "give a validated email";
	}
	if (strlen($_POST['password']) <6) {
		$errors['password'] = "give a 6 car password";
	}
	if (empty($image['file'])) {
		$errors['file'] = "give a validated file";
	}
	if (empty($errors)) {
		mysqli_connect('localhost','root','',' test');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<div style="margin-bottom:5px">
			<label>email</label>
			<input type="email" name="email">
			<?php 
			if(isset($errors['email'])){
				?>
				<p><?php echo $errors['email']; ?></p>
				<?php
			}
			?>
		</div>
		<div style="margin-bottom:5px">
			<label>password</label>
			<input type="password" name="password">
			<?php if(isset($errors['password'])){
					?>
				<p><?php echo $errors['password']; ?></p>
				<?php
			}
			?>
		</div>
		<div style="margin-bottom:5px">
			<label>Image</label>
			<input type="file" name="image">
			<?php if(isset($errors['file'])){
					?>
				<p style="color: red;"><?php echo $errors['file']; ?></p>
				<?php
			}
			?>
		</div>
		<div style="margin-bottom:5px">
			<button type="submit" name="submit" style="background-color: red;padding: 10px">Submit</button>
		</div>
	</form>

</body>
</html>