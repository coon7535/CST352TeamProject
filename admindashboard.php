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
        <link rel="stylesheet" href="css/stylesheet_admindashboard.css" type="text/css" />

        <!-- Custom Checkbox -->
        <link rel="stylesheet" href="css/custom_checkbox.css" type="text/css" />

        <!-- Custom JavaScript -->
        <script src="js/script_dashboard.js"></script>

        <!-- Underscore JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" ></script>

        <title>Admin Dashboard</title>
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
                    <a href="frontpage.php" id="logoutButtonRedirect" class="button is-rounded is-danger is-pulled-right">Logout</a>
                </div>
            </section>

            <section id="main" class="columns is-multiline">
                <div class="column is-full">
                    <section class="hero">
                        <div class="hero-body">
                            <div class="container has-text-centered">
                                <div class="subtitle is-size-1">Admin</div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="column is-full">
                    <div class="is-size-3 is-pulled-left">Edit database:</div>
                    <button id="addButton" class="button is-info is-pulled-right">Add</button>
                </div>
                <div class="column is-full">

                    <!-- Use "dataTable" ID to populate table -->
                    <table id="dataTable" class="table is-striped is-fullwidth is-hoverable is-bordered">

                        <!-- Example on how to display data -->
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Units</th>
                                <th>MLO</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CST 300</td>
                                <td>Major ProSeminar</td>
                                <td>14</td>
                                <td>1</td>
                                <td></td>
                                <td><button id="editButton" class="button is-warning">Edit</button></td>
                                <td><button id="deleteButton" class="button is-danger">Delete</button></td>
                            </tr>
                        </tbody>
                        <!-- End of table -->
                    </table>
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
	</body>
</html>

<!--

-->
