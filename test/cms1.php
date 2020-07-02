        <!-- <?php
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
                            ?> -->