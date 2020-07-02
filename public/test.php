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
            <div class="list-group">
                <a href="#" class="list-group-item active ">NAVBAR</a>
               <?php
                $query = "SELECT * FROM `navbar` WHERE `visible`= 1";
                $result = mysqli_query($conn ,  $query);
                if(mysqli_num_rows($result) > 0){
                    while($row= mysqli_fetch_assoc($result)){
               ?>
                <li class ="list-group-item">
                        <a href = "test.php?menu=<?php echo $row['id']?>"><?php echo $row['item_name']?></a>
                        <?php 
                            $query1 = "SELECT * FROM `pages` WHERE `visible`=1 AND pages.item_name_id = $row[id]";
                            $result1 = mysqli_query($conn ,  $query1);
                            if(mysqli_num_rows($result1) > 0){
                                while($row1= mysqli_fetch_assoc($result1)){
                        ?>
                            <ul>
                                <li class = "">
                                    <a href = "test.php?pages=<?php echo $row1['id']?>"><h4> <?php echo $row1['page_name']?> </h4></a>
                                <li>
                            </ul>
                        <?php
                                }
                            }
                        ?>
                </li>
              <?php
                   }
                }
              ?>
            </div>
        </div>     
<!--footer -->
<?php
include "../include/layout/footer.php";
?>
<!--end footer-->
</body>           
</html>