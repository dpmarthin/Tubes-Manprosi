<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="detailReview.css">
        <title>Detail Review</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid" id="id-navbar">
                <a class="navbar-brand" href="index.html">Ujung Landasan Restaurant</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="reviewForm.php">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listReview.php">Lihat Review</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php 
            include("connect.php");
            $id = $_GET['id'];
            
            $data = mysqli_query($conn,"SELECT * FROM review WHERE id = '$id'");
            $value = $data->fetch_assoc();


        ?>
        <div class="row">
            <center>
                <h1>Detail Review</h1>
                <br>
                <div class="col">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <br>
                            <input type="string" class="form-control" name="nama" id="nama" value="<?php echo $value['nama']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <br>
                            <input type="string" class="form-control" name="email" id="email" value="<?php echo $value['email']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon">No Telepon</label>
                            <br>
                            <input type="string" class="form-control" name="no_telepon" id="no_telepon" value="<?php echo $value['no_telepon']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="review">Review</label>
                            <br>
                            <input type="string" class="form-control" name="review" id="review" value="<?php echo $value['review']; ?>" disabled>
                        </div>
                        <a name="update" id="update" href="formUpdateReview.php?id=<?php echo $id ?>" class="btn btn-warning">Edit</a>
                        <a name="delete" id="delete" href="deleteReview.php?id=<?php echo $id ?>" class="btn btn-danger">Delete</a>
                    </form>
                </div>
            <center>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>