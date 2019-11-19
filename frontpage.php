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
        <link rel="stylesheet" href="css/stylesheet_frontpage.css" type="text/css" />

        <!-- Custom JavaScript -->
        <script src="js/script_frontpage.js"></script>

        <!-- Underscore JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script>

        <title>Frontpage</title>
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
                    <button id="loginButtonModal" class="button modal-button is-rounded is-primary is-pulled-right"
                    data-target="#login_modal" aria-haspopup="true">Login</button>
                </div>
            </section>

            <section id="main" class="columns is-vcentered">
                <div class="column has-text-centered">
                    <div id="frontpageHeader" class="display has-text-white">
                        Major Learning Outcome Tracker
                    </div>
                    <div id="frontpageSummary" class="subtitle has-text-white">
                        Web application designed for students
                    </div>
                    <a id="clickHereButton" class="button is-primary is-inverted is-outlined" href="listmlos.php" type="button">Click here to view courses</a>
                </div>
            </section>

            <section id="footer" class="columns is-vcentered has-text-grey">
                <div class="column has-text-left is-one-third">
                    <div class="display is-size-6">
                        CST352 - Web Scripting
                    </div>
                </div>
                <div class="column has-text-centered is-one-third">
                    <div class="display is-size-6">
                        Herman | Cody | Leann | Joshua
                    </div>
                </div>
                <div class="column has-text-right is-one-third">

                </div>
            </section>

            <!-- LOGIN MODAL -->
            <div class="modal modal-fx-fall" id="login_modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div class="box has-text-centered">
                        <form action="php/login.php" method="POST">
                            <section class="hero">
                                <div class="hero-body">
                                    <div class="container">
                                        <div class="title">Login</div>
                                    </div>
                                </div>
                            </section>
                            <input name="name_loginUsername" id="id_loginUsername" class="input" type="text" placeholder="Username:">
                            <br>
                            <input name="name_loginPassword" id="id_loginPassword" class="input" type="text" placeholder="Password:">
                            <br />
                            <button name="name_loginButton" id="id_loginButton" class="button is-primary">Login</button>
                        </form>
                            <hr />
                            <a href="registerpage.php" class="button is-link is-outlined">Register</a>
                            <br />
                            <div id="id_errorOutput" class="subtitle is-size-6 has-text-danger">>error message<</div>
                    </div>
                </div>
                <button class="modal-close is-large" aria-label="close"></button>
            </div>

            <!-- end of content -->
        </div>
	</body>
</html>

<!--

-->
