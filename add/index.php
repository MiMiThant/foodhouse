<?php

    include('./connect.php');

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

            //  if($result){
            //     echo "Successful..";
            //  }else{
            //     echo "Fail...";
            //  }
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
    <h2 class="text-center mt-2 mb-5">Food List</h2>

    <a href="add.php" class="btn btn-primary ml-5 mb-3">+Add New</a>

    <div class="container d-flex justify-content-center">
        <table class="table table-bordered w-60">
            <thead class="table-dark">
                <tr>
                    <th class="col-2">No</th>
                    <th class="col-3">Name</th>
                    <th class="col-2">Price</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="SELECT * FROM icecreams";
                    $result=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id=$row['id'];
                        $fname=$row['fname'];
                        $price=$row['price'];
                        $images=$row['images'];

                        echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$fname.'</td>
                                <td>'.$price.'</td>
                                <td><img src='.$images.' /></td></tr>';
                    }

                ?>
            </tbody>
        </table>

    </div>
    
</body>
</html>