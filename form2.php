<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
                <form method="post" enctype="multipart/form-data">
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
                    <div class="mb-3">
                        <label class="form-label">Upload File</label>
                        <input type="file" name="myfile" class="form-control" required>
                    </div>

                    <input type="submit" name="btnupload" value="Upload File" class="btn btn-primary">

                </form>

                <hr>

                <?php
                if(isset($_POST['btnupload']))
                {
                    if($_FILES['myfile']['error'] == 0)
                    {
                         if($_FILES['myfile']['type']=='image/jpeg' || $_FILES['myfile']['type']=='image/png'){
                            if($_FILES['myfile']['size'] <= 51200){
                                $source = $_FILES['myfile']['tmp_name'];

                                $dest = $_SERVER['DOCUMENT_ROOT']."/classwork/upload/".$_FILES['myfile']['name'];

                        // Folder nahi ho to bana do
                        //if(!is_dir($uploadDir))
                        //{
                       // //    mkdir($uploadDir,0777,true);
                       // }

                       // $dest = $uploadDir.basename($_FILES['myfile']['name']);

                                if(move_uploaded_file($source,$dest))
                                {
                                    echo "<p class='text-success'>File Uploaded Successfully!</p>";
                                }
                                else
                                {
                                    echo "<p class='text-danger'>Error in uploading the file!</p>";
                                }

                            }
                            else
                            {
                                echo "<p class='text-danger'> File Size Connot ecexted 50 KB !!!! </p>";
                            }
                        }
                         else
                        {
                             echo "<p class='text-danger'>Invalid File Format !!!!</p>";  
                        }
                    }
                    else
                    {
                        echo "<p class='text-danger'>File is corrupted!</p>";
                    }
                }
                ?>

            </div>

            <div class="col-sm-4"></div>
        </div>
    </div>

</body>
</html>