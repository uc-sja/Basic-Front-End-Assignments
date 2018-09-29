<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Assigment 4</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	</head>
	<body>
		<form name="login_form" id="login_form" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> class="form-horizontal" method="post">
			<div class="container">
				<div class="form-group">
					<label class="control-label col-sm-4" for="user_text">Username</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="user_text" id="user_text">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="user_password">Password</label>
					<div class="col-sm-5">
						<input type="password" class="form-control" name="user_password" id="user_password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-6 col-sm-1">
						<button type="submit" class="form-control" name="user_submit" id="user_submit">Login</button>
					</div>
				</div>
			</div>
		</form>
		<?php
			$login_data = array();
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(isset($_SESSION['student'])){
					for($i = 0; $i < count($_SESSION['student']); $i++) {						
						if(($_SESSION['student'][$i]['name_text'] == $_POST['user_text']) && ($_SESSION['student'][$i]['user_password'] == $_POST[user_password])) {
							$_SESSION['login'] = 'true';
							$_SESSION['timeout'] = time();
							$_SESSION['username'] = $_SESSION['student'][$i]['name_text'];
						}
					}
					header("Location: welcome.php");
				}
				else {
					echo "Record Empty";
				}
			}
		?>
		<pre>
			&lt;?php session_start(); 
			?&gt;
			&lt;?php
				$login_data = array();
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					if(isset($_SESSION['student'])){
						for($i = 0; $i < count($_SESSION['student']); $i++) {						
							if(($_SESSION['student'][$i]['name_text'] == $_POST['user_text']) && ($_SESSION['student'][$i]['user_password'] == $_POST[user_password])) {
								$_SESSION['login'] = 'true';
								$_SESSION['timeout'] = time();
								$_SESSION['username'] = $_SESSION['student'][$i]['name_text'];
							}
						}
						header("Location: welcome.php");
					}
					else {
						echo "Record Empty";
					}
				}
			?&gt;
		</pre>
	</body>
</html>