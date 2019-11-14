<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css" />

        <!-- Custom JavaScript -->
        <script src="js/script.js"></script>

        <!-- Underscore JS -->
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script>        

        <title>Login test</title>
	</head>
	<body>
        <main>
            <div class="container is-fluid">
            	
            	
				<div class="columns has-text-centered">
					<div class="column">
						<div id="main_display" class="display is-size-1">Login</div>
						<hr>
						<form action="php/login.php" method="POST">
							<input name="name_input_username_login" id="id_input" class="input" type="text" placeholder="Username:">
							<br>
							<input name="name_input_password_login" id="id_input" class="input" type="text" placeholder="Password:">
							<br>
							<button name="name_button_login" id="id_button_login" class="button has-background-link has-text-white">Login</button>
						</form>	
						<hr>
						<button id="id_button_reg" class="button is-primary modal-button" data-target="#register_modal" aria-haspopup="true">Register</button>
						
						<!-- REGISTER MODAL -->		
	            		<div class="modal" id="register_modal">
					  		<div class="modal-background"></div>
					  		<div class="modal-content">
					    	<div class="box has-text-centered">
					    
					    		<form action="php/register.php" method="POST">
					    			<div class="display is-size-4">
					    				Register
					    			</div>
									<input name="name_input_username_reg" id="id_input_reg" class="input" type="text" placeholder="Username:">
									<br>
									<input name="name_input_password_reg" id="id_input_reg" class="input" type="text" placeholder="Password:">
									<br>
									<button name="name_button_reg" id="id_button_reg" class="button is-primary">Register</button>
									<br>
									<div id="error_reg" class="subtitle is-size-6 has-text-danger"></div>
								</form>
								
					    	</div>
					  	</div>
					  	<button class="modal-close is-large" aria-label="close"></button>
					  	
					  					
					</div>
				</div>

            </div>
        </main>
	</body>
</html>

<!--
							


-->
