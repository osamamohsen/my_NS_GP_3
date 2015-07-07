        <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<!DOCTYPE html>
<?php
session_start();
if(@$_SESSION['kind']==null){
    include_once 'login.php';
}else{
?>
<?php include_once './resources/resources.php'; ?>
    <meta charset="UTF-8">
    <title>Network Signals</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body >

<!--Start Header-->
<?php include_once './site/header.php' ?>
<!--End Header-->
<br>
<a href="index.php"></a>

<div class="container12" style="width: 1262px;">
        <div class="row">
            <div class="column7" >
                <?php include_once './site/menu.php'; ?>
            </div><!-- end column87 -->
        </div><!-- end row -->
            <?php include_once './site/footer.php'; ?>
    </div><!-- end container12 -->
      

    
</body>
</html>
 <?php }?>