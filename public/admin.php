<?php
include("../include/layout/header.php");
include("../include/functions.php");
include("../include/connect.php");
?>
<style type="text/css">
    li {
        display: block;
    }
</style>

<body>
    <!--===================This start Navbar===============================-->
    <div id="myNav" class="overlay ">
        <div class=" theme-showcase  nav">
            <!-- Main jumbotron for a primary marketing message or call to action -->
            MENU
        </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> &times; </a>
        <div class="overlay-content ">
            <ul class=" list-group col-md-4">
                <li class="list-group-item active ">
                    <a href="#">
                        CMS
                    </a>
                </li>
                <?php
                $query = "SELECT * FROM `navbar` WHERE visible=1";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <li class="list-group-item  ">
                            <a href="cms.php?menu=<?php echo   mysqli_real_escape_string($conn, $row["id"]);  ?> ">
                                <?php echo  mysqli_real_escape_string($conn, $row["item_name"]);   ?> </a>
                            <?php
                            $query1 = "SELECT * FROM `pages`  WHERE visible=1 AND `pages`.`item_name_id`= " . mysqli_real_escape_string($conn, $row["id"]);
                            $result1 = mysqli_query($conn, $query1);
                            if (mysqli_num_rows($result1) > 0) {
                                ?>

                                <?php
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                    ?>

                                    <ul>
                                        <li class="">
                                            <a href=" cms.php?page=<?php echo   mysqli_real_escape_string($conn, $row1["id"]);  ?> ">
                                                <h3>
                                                    <?php echo  mysqli_real_escape_string($conn, $row1["page_name"]); ?>
                                                </h3>

                                            </a>
                                        </li>
                                    </ul>

                                <?php
                                }
                            }


                            ?>


                        </li>

                    <?php
                    }
                }
                mysqli_free_result($result);
                ?>
            </ul>
        </div>
    </div>

    <span style=" font-size:30px;cursor:pointer" onclick="openNav()">&#9776; NAVBAR MENU </span>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    <!--===============================this end Navbar=========================-->
    <div class="container theme-showcase" role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class= 'container'>
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
    include("../include/layout/footer.php");
    ?>
    <!--end footer-->
</body>

</html>