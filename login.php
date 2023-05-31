<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" 
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include('header.php') ?>

<div class="container w-50 my-3">
<form>
    
    <div class="mb-2">
        <label><i class="fas fa-user me-2"></i> User Name</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-2">
        <label><i class="fas fa-envelope me-2"></i> Email</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-2">
        <label><i class="fas fa-key me-2"></i> Password</label>
        <input type="password" class="form-control">
    </div>
    <button class="btn btn-primary">
        <i class="fas fa-paper-plane me-2"></i> Login
    </button>
</form>
</div>
    
</body>
</html>