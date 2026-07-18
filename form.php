<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <form  method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="txtname" value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="txtLast" value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Email Id</label>
                        <input type="email" name="txtemail" value="" class="form-control"/>
                    </div>
                         <div class="form-group">
                        <label>password </label>
                        <input type="password" name="textpassword" value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Upload File</label>
                        <input type="file" name="myfile" class="form-control"/>
                    </div>
                    <input type="submit" name="btninfo" value="Get Info" class="btn btn-info mt-3"/>
                </form> 
                <hr size="5" color="green">
               <?php
                    if(isset($_POST['btninfo'])){
                        echo "Name=> $_POST[txtname] <br>";
                        echo "Last_name=> $_POST[txtLast] <br>";
                        echo "email=> $_POST[txtemail] <br>";
                        echo "password=> $_POST[textpassword] <br>";
                        echo "file uploading processes=";
                        echo "file_name= ".$_FILES['myfile']['name']."<br>";
                        echo "file_type= ".$_FILES['myfile']['type']."<br>";
                        echo "file_size= ".$_FILES['myfile']['size']."bytes <br>";
                        
                        echo "file_error= ".$_FILES['myfile']['error']."<br>";
                        echo "file_temp= ".$_FILES['myfile']['name']."<br>";
                      
                    }
               ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    
</body>
</html>