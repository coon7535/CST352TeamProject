<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <!-- Bulma Modal Effects -->
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
        <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/stylesheet_dashboard.css" type="text/css" />

        <!-- Custom Checkbox -->
        <link rel="stylesheet" href="css/custom_checkbox.css" type="text/css" />

        <!-- Custom JavaScript -->
        <script src="js/script_dashboard.js"></script>

        <!-- Underscore JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script>

        <title>Dashboard</title>
	</head>
	<body>
        <div class="container">
            <section id="header" class="header columns is-vcentered is-multiline">
            	<div class="column has-text-left is-one-third">
                    
               </div>
                <div class="column has-text-centered is-one-third">
                    <div class="is-size-4 has-text-dark">
                        Final Project
                    </div>
                </div>
                <div class="column has-text-right is-one-third">
                	<a href="frontpage.php" id="logoutButtonRedirect" class="button is-rounded is-danger is-pulled-right">Logout</a>
                </div>
            </section>

            <section id="tiles" class="columns is-multiline is-centered">
                <!-- Boxes filled with stats about user -->
                <div class="column is-full">
                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-full">
                            <div class="tile is-parent has-text-centered">
                                <article class="tile is-child notification is-primary">
                                    <p class="subtitle is-size-6">logged in as:</p>
                                    <p id="loggedInUser" class="title is-size-1">!Username!</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Boxes filled with stats about user -->
                <div class="column is-full">
                    <!-- Data about the users check courses -->
                    <div>
                        <div class="tile is-ancestor">
                            <div class="tile is-vertical">
                                <div class="tile is-parent has-text-left">
                                    <article class="tile is-child notification is-info">
                                        <p class=" is-size-6">Total Units:</p>
                                        <p id="loggedInUser" class="subtitle is-size-4">!totalUnits!</p>
                                    </article>
                                </div>
                                <div class="tile is-parent has-text-left">
                                    <article class="tile is-child notification is-warning">
                                        <p class=" is-size-6">Percentage of completion:</p>
                                        <p id="loggedInUser" class="subtitle is-size-4">!percentageoFCompletion!</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<section id="main" class="columns">
                <div class="column">
                    <div class="subtitle is-size-1  has-text-centered">
                        Courses
                    </div>

                    <div id="mlos">
                    	<?php include("php/displayMlosDashboard.php") ?>
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
            <script>
            	
            	window.onload = init;
            	
            	function init() {
            		<?php include("php/displayCoursesDashboard.php"); ?>
            	}            	
            </script>
        </div>
	</body>
</html>

<!--

-->
