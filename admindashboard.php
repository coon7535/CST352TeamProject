<?php
session_start();  //starts or resumes the use of session variables

if (!isset($_SESSION['authenticated'])) {
	
	header("Location: frontpage.php"); //redirecting to login screen
	
};

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <!--   Bulma -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <!-- Bulma Modal Effects -->
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
        <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/stylesheet_admindashboard.css" type="text/css" />

        <!-- Underscore JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script>

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/0c0cc9bbd6.js" crossorigin="anonymous"></script>

        <title>Admin Dashboard</title>

  <script>

    $(document).ready(function(){
      $("#delete").on("click", function(e){
        if (confirm("Are you sure you want to delete " + $(this).attr("className") + "'s record?") == false) 
        e.preventDefault();
    
      });
    });

  </script>
	</head>
	<body>
        <div class="container">
            <section id="header" class="header columns is-vcentered">
            	<div class="column is-half">
                    <div class="is-size-4 has-text-dark">
                        Final Project
                    </div>
                </div>
                <div class="column is-half">
                    <a href="php/logout.php" id="logoutButtonRedirect" class="button is-rounded is-danger is-pulled-right">Logout</a>
                </div>
            </section>

            <section id="main" class="columns is-multiline">
                <div class="column is-full">
                    <section class="hero">
                        <div class="hero-body">
                            <div class="container has-text-centered">
                                <div class="subtitle is-size-1">Admin</div>
                                        <form action="./php/addCourse.php">
                                            <button id="addButton" class="button is-info is-pulled-right">Add new Course</button>
                                        </form>
                            </div>
                        </div>
                    </section>
                </div>
<!--                 <div class="column is-full">
                    <form action="addCourse.php">
                        <div class="is-size-3 is-pulled-left">Edit the MLO's</div>
                        <button id="addButton" class="button is-info is-pulled-right">Add</button>
                    </form>
                </div> -->
                <div class="column is-full">

                    <div id="mlos">
                        <?php include("php/displayMlosAdmin.php") ?>
                    </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Author Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe  width="100%" height="auto" name="authorInfo"> </iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
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
            <!-- End of content -->
        </div>
                    <script>
                
                window.onload = init;
                
                function init() {
                    <?php include("php/displayCoursesAdmin.php") ?>

                }               
            </script>
	</body>
</html>

<!--

-->
