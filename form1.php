<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
               <form  method="post" enctype="multipart/form-data">
                      
                    <div class="form-group">
                        <label>Upload File</label>
                        <input type="file" name="myfile" class="form-control"/>
                    </div>
                    <input type="submit" name="btnupload" value="Upload File" class="btn btn-primary mt-3"/>
                </form> 
                <hr size="5" color="green">
                <?php
                    if(isset($_POST['btnupload'])){
                        if($_FILES['myfile']['error'] == 0){
                            $source = $_FILES['myfile']['tmp_name'];
                            $dest = $_SERVER['DOCUMENT_ROOT']."/classwork/upload/".$_FILES['myfile']['name'];
                                if(move_uploaded_file($source, $dest))
                                    echo "<p class='text-success'>File Uploaded Successfully !!!!<p>";
                                else
                                    echo "<p class='text-danger'>Error in uploading the file !!!!</p>";
                         
                        }
                        else{
                            echo "<p class=''text-danger'>File is corrupted !!!!</p>";
                        }
                    }
                ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    
</body>
</html>