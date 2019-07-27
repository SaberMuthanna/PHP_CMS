<?php
include("../include/layout/header.php");
include("../include/functions.php");
include("../include/connect.php");
?>
<style>
    ul {
        list-style-type: none;
    }
</style>

<body>
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
                        MENU
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

    <span style=" font-size:30px;cursor:pointer" onclick="openNav()">&#9776; NAVBAR MENU</span>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    <!--THIS START MENU-->


    <!--THIS END mENU-->
    <div class="container">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
            $query = "SELECT * FROM `navbar` WHERE visible=1";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree<?php echo   mysqli_real_escape_string($conn, $row["id"]);  ?>" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree<?php echo   mysqli_real_escape_string($conn, $row["id"]);  ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
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

                            </div>
                        </div>
                    </div>
                <?php
                }
            }
            mysqli_free_result($result);
            ?>
        </div>
    </div>

    </div>
    <!--===========================================================================-->
    <!--start footer -->
    <?php
    include("../include/layout/footer.php");
    ?>
    <!--end footer -->
</body>

</html>