<?php
$hostname = 'localhost';
$username = 'root';
$password = 'SSSmmm123';
$bdname ='test';
$con = mysqli_connect($hostname,$username,$password,$bdname);
if ($con){
    echo "connect test";
}
else{
    echo "connect failed ".mysqli_connect_error()."<br><br>".mysqli_connect_errno();
}

   $query = "SELECT `id`, `name`, `salary` FROM `emp` WHERE 1";
   $check_conn = mysqli_query($con,$query);
   if(mysqli_num_rows($check_conn)>0){
       echo '<br>'.'<h1>'.'employee info'.'</h1>'.'<br>';
       while ($row=mysqli_fetch_assoc($check_conn)){
           echo '<br>'.'id    : '.$row['id'].'<br>'.
                'Name    : '.$row['name'].'<br>'.
                'Salary    : '.$row['salary'];
       }
       
   }
   else{
       echo "can not connect";
   }
    mysqli_close($con);

?>

