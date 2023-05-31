<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <title>Image Upload</title>
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<body class="text-center">
    <h1 class="mb-5">Add Foods</h1>
    <div class="container justify-content-center d-flex">
        <form action="index.php" class="w-50" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <input type="text" name="fname" placeholder="Food Name"
                class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="price" name="price" placeholder="Price"
                class="form-control">
            </div>
            <div class="form-group mb-3">
                <input type="file" name="file"
                class="form-control">
            </div>
            
            <button class="btn btn-primary form-control" name="submit" type="submit">Add New</button>
      
        </form>
    </div>
</body>
</html>