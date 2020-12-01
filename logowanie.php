<!DOCTYPE html>
<html lang="pl">
<head>
<?php
    //include('php/database-connect.php');
    include('php/header.php');
?>
<meta charset="utf-8">
<title>Logowanie</title>
</head>
<body>
<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
		<?php
			//include('php/login-exe.php');
			include('php/baner.php');
		?>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Zaloguj się</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="php/login-exe.php" autocomplete="off">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Login/E-mail" name="login" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Hasło" name="password" type="password" value="">
			    		</div>
			    		<!--div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Zapamiętaj mnie
			    	    	</label>
			    	    </div-->
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Zaloguj">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php
    //include('php/database-disconnect.php');
    include('php/footer.php');
?>
</body>
</html>