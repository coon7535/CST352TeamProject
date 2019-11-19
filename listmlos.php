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
                            <li class="is-active"><a href="#" aria-current="page">Register</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="column is-half">
                    <button id="loginButtonModal" class="button modal-button is-rounded is-primary is-pulled-right"
                    data-target="#login_modal" aria-haspopup="true">Login</button>
                    <a href="registerpage.php" id="regButtonRedirect" class="button is-rounded is-link is-pulled-right">Register</a>
                </div>
            </section>

            <section id="main" class="columns">
                <div class="column">
                    <div class="subtitle is-size-1  has-text-centered">
                        Courses
                    </div>
                    <div class="mlos">
                        <section class="hero">
                            <div class="hero-body">
                                <div class="container">
                                    <div id="mloTitle" class="title is-size-4">
                                        MLO 1: PROFESSIONAL COMMUNICATION & DEVELOPMENT
                                    </div>
                                    <div id="mloDescriptin" class="subtitle">
                                        Student will effectively communicate in
                                        an academic and professional setting via written
                                        documentation and oral presentation.
                                    </div>

                                    <!-- This is where we are going to courses for database -->
                                    <table id="courseTable" class="table is-striped">
                                        <thead>
                                            <tr>
                                                <th>Satisfied by:</th>
                                                <th>Units</th>
                                                <th>Checked</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">CST 300 Major ProSeminar</a></td>
                                                <td>1</td>
                                                <td>
                                                    <label class="checkbox-label">
                                                        <input type="checkbox">
                                                        <span class="checkbox-custom rectangular"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">CST 301 Major ProSeminar Lab</a></td>
                                                <td>1</td>
                                                <td>
                                                    <label class="checkbox-label">
                                                        <input type="checkbox">
                                                        <span class="checkbox-custom rectangular"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                        <hr />


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
                            <a href="registerpage.php" class="button is-link">Register</a>
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
