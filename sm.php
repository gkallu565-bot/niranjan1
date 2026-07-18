<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="sm1.php">niranjan</a>
    <br><br><br>
    <form method="post">
       
        <input type="text" name="txtname" 
             placeholder="enter name ">
        <input type="submit" name="btnsub" value="dispaly">
        <?php
           if(isset($_REQUEST['btnsub'])){
            $name = $_REQUEST['txtname'];
            setcookie("mydata",$name,time()+120);
           }
        ?>
    </form>
</body>
</html>