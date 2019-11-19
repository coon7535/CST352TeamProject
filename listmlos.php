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
        <link rel="stylesheet" href="css/stylesheet_listmlos.css" type="text/css" />

        <!-- Custom Checkbox -->
        <link rel="stylesheet" href="css/custom_checkbox.css" type="text/css" />

        <!-- Custom JavaScript -->
        <script src="js/script_listmlos.js"></script>

        <!-- Underscore JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script>

        <title>Courses</title>
	</head>
	<body>
        <div class="container">
            <section id="header" class="header columns is-vcentered">
                <div class="column is-half has-text-centered">
                    <nav class="breadcrumb" aria-label="breadcrumbs">
                        <ul>
                            <li><a href="frontpage.php">Frontpage</a></li>
                            <li class="is-active"><a href="#" aria-current="page">Courses</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="column is-half">
                    <a href="registerpage.php" id="regButtonRedirect" class="button is-rounded is-link is-pulled-right">Register</a>
                </div>
            </section>

            <section id="main" class="columns">
                <div class="column">
                    <div class="subtitle is-size-1  has-text-centered">
                        Courses
                    </div>

                    <div id="mlos">
                    	<?php include("php/displayMlos.php") ?>
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
            		<?php include("php/displayCourses.php") ?>            		
            	}            	
            </script>
        </div>
	</body>
</html>

<!-- 
   	                <tr>
                     <td><a id="" href="#"></a></td>
                     <td id="courseUnits"></td>
                     <td><label class="checkbox-label"><input type="checkbox"><span class="checkbox-custom rectangular"></span></label></td></tr>

-->