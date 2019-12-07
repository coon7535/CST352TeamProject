<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <!-- Bulma Extra -->
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
        <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/stylesheet_registerpage.css" type="text/css" />

        <!-- Custom JavaScript -->
        <script src="js/script_frontpage.js"></script>

        <!-- Underscore JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
		<script>
			$(document).ready(function() {
				$("#id_regButton").on("click", function(){
					$.ajax({
						method: "GET",
						url: "php/registerUser.php",
						dataType: "json",
						data: { "password": $("#id_regPassword").val(),
								"username" : $("#id_regUsername").val() }, //the parameters that are usually expected are usually values in the GET or POST array.
						success: function(result,status) {
							//alert(result);
							if (result == true) {
								location.href = "admindashboard.php"; //take user to dashboard after successful registration.
								}
							else {
								$("#id_errorOutput").html("Wrong credentials!");
								}
						}
					});//ajax
				});//anonymous function
			}); //document.ready
		
		</script>
        <title>Register</title>
	</head>
	<body>
        <div class="container">
            <section id="header" class="header columns is-vcentered">
                <div class="column has-text-centered">
                    <nav class="breadcrumb" aria-label="breadcrumbs">
                        <ul>
                            <li><a href="frontpage.php">Frontpage</a></li>
                            <li class="is-active"><a href="#" aria-current="page">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </section>

            <section id="main" class="columns is-vcentered">
                <div class="column has-text-centered">
                    <div class="box has-text-centered">
                            <section class="hero">
                                <div class="hero-body">
                                    <div class="container">
                                        <div class="title">Register</div>
                                    </div>
                                </div>
                            </section>
                            <input name="name_regUsername" id="id_regUsername" class="input" type="text" placeholder="Username:">
                            <br>
                            <input name="name_regPassword" id="id_regPassword" class="input" type="text" placeholder="Password:">
                            <br />
                            <button name="name_regButton" id="id_regButton" class="button is-link">Register</button>

                            <hr />
                            <div class="checkbox"><input id="admin" type="checkbox">I'd like to be an admin.</div>
                            <div id="id_errorOutput" class="subtitle is-size-6 has-text-danger"></div>
                    </div>
                </div>
            </section>

            <section id="footer" class="columns is-vcentered has-text-grey">
                <div class="column has-text-centered">
                    <div class="display is-size-6">
                        Herman | Cody | Leann | Joshua
                    </div>
                </div>
            </section>

            <!-- end of content -->
        </div>
	</body>
</html>

<!--

-->
