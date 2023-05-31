<?php

    include('./dbconnect.php');

    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $price=$_POST['price'];
        $images=$_FILES['file'];

        // echo $fname;
        // echo $price;
        // print_r($images);

        $imgname=$images['name'];
        $tmp_name=$images['tmp_name'];
        $filename_separate=explode('.',$imgname);

        $file_extension=strtolower(end($filename_separate));
        $extension=array('jpeg','png','jpg');

        if(in_array($file_extension,$extension))
        {
            $upload_image='images/'.$imgname;
            move_uploaded_file($tmp_name,$upload_image);

            $sql="INSERT INTO icecreams(fname,price,images) 
                VALUES('$fname','$price','$upload_image')";
        
             $result=mysqli_query($con,$sql);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include('header.php') ?>

    <div class="row flex-column flex-lg-row flex-sm-fill p-4">
                    <?php
                    $sql="SELECT * FROM icecreams";
                    $result=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id=$row['id'];
                        $fname=$row['fname'];
                        $price=$row['price'];
                        $images=$row['images'];
                    
                        echo '<div class="col-md-3 col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-title">
                                    <ol><img style="width:90%;height:300px;" src='.$images.' /></ol></div>
                                    <div class="card-body">
                                        <ol>'.$fname.'</ol>
                                <ol>'.$price.'</ol>
                                </div>
                                </div>
                            </div>';
                    }

                ?>

                   
            </div>
</body>
</html>