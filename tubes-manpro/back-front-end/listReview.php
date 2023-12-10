<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="listReview.css">
    <title>List Review</title>
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
    <center>
        <div class="container">
            <h1>List Review</h1>
            <br>

            <?php
            include("connect.php");

            $query = "SELECT * FROM review";
            $result = $conn->query($query);


            if ($result->num_rows > 0) {
                echo '<table  class="text-center" width=100% border="1" cellpadding="4">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Review</th>
                            </tr>
                        </thead>
                    <tbody>';

                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>' . $row['nama'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['no_telepon'] . '</td>
                            <td>' . $row['review'] . '</td>
                            <td><a class="btn btn-primary" href="detailReview.php?id='.$row['id'].'">Lihat Detail</a></td>
                        </tr>';
                }

                echo '
                        </tbody>
                    </table>';
            }

            else {
                echo "Tidak Ada Daftar Reservasi Dalam Tabel";
            }

            ?>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>