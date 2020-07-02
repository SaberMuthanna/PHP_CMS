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
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- /iii -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php
                $query = "SELECT * FROM `navbar` WHERE visible=1";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo   mysqli_real_escape_string($conn, $row["id"]);  ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo   mysqli_real_escape_string($conn, $row["item_name"]) . mysqli_real_escape_string($conn, $row["id"]);  ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne<?php echo   mysqli_real_escape_string($conn, $row["id"]);  ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
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
                                                        <h5>
                                                            <?php echo  mysqli_real_escape_string($conn, $row1["page_name"]); ?>
                                                        </h5>

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
            <!-- /iii --> 
        </div>
        <!-- ======================= secod pation=================================================================== -->
        <div class="col-md-9">

            <div class=" panel panel-primary   "> <!--well-->
                <div class="panel-heading">Panel heading without title</div>  
                <div class="panel-body">Panel content </div>

            </div>

        </div>

    </div>

</div>
<!-- /.container -->
<!--footer -->
<?php
include "../include/layout/footer.php";
?>
<!--end footer-->

</body>

</html>