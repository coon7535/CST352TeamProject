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
                        <form action="php/register.php" method="POST">
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
                        </form>
                            <hr />
                            <div id="id_errorOutput" class="subtitle is-size-6 has-text-danger">>error message<</div>
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
