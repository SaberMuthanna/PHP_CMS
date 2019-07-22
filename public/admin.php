<?php
    include("../include/layout/header.php");
    include("../include/functions.php");
    include("../include/connect.php");
?>
<body>
    <!--=============================================================================================-->
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CMS</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="cms.php">Manage Content</a></li>
                    <li class="active"><a href="admin.php">Admin</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admins Tool <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="cms.php">Manage Content</a></li>
                            <li><a href="admin.php">Admin</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <!--=============================================================================================-->
    <div class="container theme-showcase" role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Admin Area</h1>
            <p>This is control panal.</p>
        </div>
    </div>
    <!--=============================================================================================-->
    <!--footer -->
    <?php
        include("../include/layout/footer.php");
    ?>
    <!--end footer-->
</body>

</html>