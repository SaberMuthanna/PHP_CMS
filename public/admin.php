<?php
include "../include/layout/header.php";
include "../include/functions.php";
include "../include/connect.php";
?>
<div class="container theme-showcase" role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class='container'>
            <h1>Admin Area</h1>
            <p>This is control panal.</p>
            <p>
                <a type="button" class="btn btn-lg btn-primary" href="cms.php">Manage Contan</a>
                <a type="button" class="btn btn-lg btn-danger" href="admin.php">Admins</a>
                <a type="button" class="btn btn-lg btn-success" href="logout.php">Logout</a>
            </p>
        </div>
    </div>
    <!--=============================================================================================-->
    <!--footer -->
    <?php
    include "../include/layout/footer.php";
    ?>
    <!--end footer-->
</body>

</html>