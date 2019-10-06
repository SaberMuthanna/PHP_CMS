<?php
include("../include/layout/header.php");
include("../include/functions.php");
include("../include/connect.php");
//================================================================
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="#"> CMS</a>
            <ul>a</ul>
            <ul>b</ul>
            <ul>c</ul>
            <ul>d</ul>

        </li>
        <?php
        $query = "SELECT * FROM `navbar` WHERE visible=1";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <li><a><?php echo $row["item_name"]; ?> </a>
                    <?php
                        $query1 = "SELECT * FROM `pages`  WHERE visible=1 AND `pages`.`item_name_id`= " . $row["id"];
                        $result1 = mysqli_query($conn, $query1);
                        if (mysqli_num_rows($result1) > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                    ?>
                            <ul>
                                <?php echo   $row1["page_name"]; ?>
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
</body>

</html>