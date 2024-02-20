<?php
session_start();
include('koneksi.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PERPUSTAKAAN KITA</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-xxl position-relative bg-white d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light">
                    <a href="index.html" class="navbar-brand mx-4 mb-3">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>WELCOME</h3>
                    </a>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0">Reza Admin</h6>
                            <span>Admin</span>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>User Pages</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="user.php" class="dropdown-item">User</a>
                                <a href="petugas.php" class="dropdown-item">Petugas</a>
                                <a href="admin.php" class="dropdown-item">Admin</a>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-book me-2"></i>Buku</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="kategori.php" class="dropdown-item">Kategori Buku</a>
                                    <a href="data_buku.php" class="dropdown-item">Data Buku</a>

                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file me-3"></i>Peminjaman</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="signin.html" class="dropdown-item">Dipesan</a>
                                    <a href="signup.html" class="dropdown-item">Dipinjam</a>
                                    <a href="404.html" class="dropdown-item">Selesai</a>
                                    <a href="blank.html" class="dropdown-item">Data Pemngambilan</a>
                                    <a href="peminjaman.php" class="dropdown-item">Data Peminjaman</a>
                                </div>

                                <a href="laporan.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Laporan</a>
                            </div>
                </nav>
            </div>
            <!-- Sidebar End -->


            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                    <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <form class="d-none d-md-flex ms-4">
                        <input class="form-control border-0" type="search" placeholder="Search">
                    </form>
                    <div class="navbar-nav align-items-center ms-auto">


                        <div class="nav-item dropdown-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <span class="d-none d-lg-inline-flex">Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">

                                <a href="logout.php" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid pt-4 px-4">

                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Basic Table</h6>
                                <div class="mb-3">
                                    <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3 >
                                            <label class=" form-label">Judul</label>
                                            <input type="text" name="nama" class="form-control" id="barang" placeholder="Masukkan Judul Buku" required>
                                        </div>
                                        <div class="mb-3 ">
                                            <label class="form-label">Penulis</label>
                                            <input type="text" name="penulis" class="form-control" id="barang" placeholder="Masukkan Penulis" required>
                                        </div>
                                        <div class="mb-3 >
                                            <label class=" form-label">Penerbit</label>
                                            <input type="text" name="penerbit" class="form-control" id="barang" placeholder="Masukkan Perbit" required>
                                        </div>
                                        <div class="mb-3 >
                                            <label class=" form-label">Tahun Terbit</label>
                                            <input type="number" name="tahun" class="form-control" id="barang" placeholder="Masukkan Tahun Terbit" required>
                                        </div>
                                        <div class="mb-3 >
                                            <label class=" form-label">Nama Kategori</label>
                                            <select class="form-control" name="kategori" required>
                                                <option value="">== Pilih Kategori ==</option>
                                                <?php
                                                $mySql = "SELECT * FROM kategoribuku ORDER BY KategoriID";
                                                $myQry = mysqli_query($koneksidb, $mySql);
                                                while ($myData = mysqli_fetch_array($myQry)) {
                                                    if ($myData['KategoriID'] == $dataKategori) {
                                                        $cek = " selected";
                                                    } else {
                                                        $cek = "";
                                                    }
                                                    echo "<option value='$myData[KategoriID]' $cek>$myData[NamaKategori] </option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3 >
                                            <label class=" form-label">Stok</label>
                                            <input type="number" name="stok" class="form-control" id="barang" placeholder="Masukkan Stok" required>
                                        </div>
                                        <div class="mb-3 >
                                            <label class=" form-label">Gambar</label>
                                            <input type="file" name="foto" class="form-control">
                                        </div>
                                        <a href="buku.php" class="btn btn-danger">Back</a>
                                        <button type="submit" class="btn btn-success">Tambah</button>
                                    </form>

                                    <!-- Navbar End -->


                                    <!-- Sale & Revenue Start -->

                                    <!-- Sale & Revenue End -->


                                    <!-- Sales Chart Start -->

                                    <!-- Sales Chart End -->


                                    <!-- Recent Sales Start -->

                                    <!-- Recent Sales End -->


                                    <!-- Widgets Start -->

                                    <!-- Widgets End -->


                                    <!-- Footer Start -->

                                    <!-- Footer End -->
                                </div>
                                <!-- Content End -->


                                <!-- Back to Top -->
                                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/chart/chart.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
    </body>

    </html>
<?php } ?>