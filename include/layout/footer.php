
<div class="container">

<hr>

<footer>
    <div class="row">
        <div class="col-lg-12 ">
            <p>Copyright &copy; Company 2020 - Template by <a href="http://maxoffsky.com/">SAber Almuthanna</a>
            </p>
        </div>
    </div>
</footer>
</div>
<!-- /.container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../public/assets/js/bootstrap.min.js"></script>
<?php
if (isset($con)) {
   mysqli_close($con);
   //echo"end connet";
}
?>