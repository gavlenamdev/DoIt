<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="js/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
        <link href="css/icondesign.css" rel="stylesheet">
        <link href="css/materialdesignicon.css" rel="stylesheet">
        <script src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                $('select').material_select();
            });
        </script>
    </head>
    <style type="text/css">
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .parallax-container {
            height: "20px";
        }

    </style>
    <script>

        $(document).ready(function () {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
            $('.parallax').parallax();
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
        });
        
    </script>

    <body>
        
        
        <div class="container-fluid "> 
            <div class="row">
            	<!------ fixed button -->
            	<div class="fixed-action-btn vertical">
            		<a class="waves-effect btn-floating btn-large maroon"><i class="mdi mdi-menu"></i></a>
            		<ul>
               			<li><a class="btn-floating btn-large red" href="rgukt.php"><i class="mdi mdi-minus"></i></a></li>
                		<li><a class="btn-floating btn-large green" href=""><i class="mdi mdi-plus"></i></a></li>
                		<li><a class="btn-floating btn-large blue" href=""><i class="mdi mdi-check"></i></a></li>
                		<li><a class="btn-floating btn-large green" href=""><i class="mdi mdi-view"></i></a></li>
           			 </ul>
        		</div>
        		<!---- fixed button ends ---->
                <div class="navbar-fixed">               
                    <nav>
                        <div class="nav-wrapper fixed-top teal">
                            <a href="#" class="brand-logo" style="padding-left:30px;font-family:Lucida Calligraphy">DoIt</a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="#"><i class="mdi mdi-home"></i></a></li>
                                <li><a href="doitaddt.php" style="padding-right:30px">Add</a></li>
                                <li><a href="doitcomplete.php" style="padding-right:30px">Complete</a></li>
                                <li><a href="doitview.php" style="padding-right:30px">Vew</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>