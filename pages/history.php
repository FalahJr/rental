<!DOCTYPE html>
<html lang="en">
<head>
<title>RentalQ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/anu5.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style>
        .mobil a {
            color: #2E86DE;
        }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #2E86DE;">
        <div class="container"> 
        <a class="navbar-brand navbar_link" href="../index.php#first">RentalQ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="menu mr-3">
                    <a class="" href="../index.php#about">Tentang Kami</a>
                </li>
                <li class="menu mr-3">
                    <a class="" href="../index.php#sewa">Sewa Mobil</a>
                </li>
                <li class="menu mr-3">
                    <a class="" href="../index.php#testi">Testimoni</a>
                </li>
                
                <li class="menu mr-3">
                    <a class="" href="../index.php#kontak">Kontak</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item menu mr-3">
                    <a class="" href="login.php">Masuk</a>
                </li>
                <li class="nav-item menu">
                    <a class="" href="register.php">Daftar</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <br>
    <!-- <div id="kata_kunci" class="" style="height:10vh;">
        <div class="container mt-5">
            <div class="float-left">
                <h2>Malang</h2>
                <h6>Rab, 18 Nov 2020 - Rab, 18 Nov 2020 • 1 hari</h6>
            </div>
            <div class="float-right">
                <a class="btn btn-lg" href="../index.php#sewa" style="border-radius: 30px; background-color:#e9e6e6;">Ubah Pencarian</a>
            </div>
        </div>
    </div> -->
 <br>
 <br>
 <br>
<center>
     <h3>History Peminjaman</h3>
     <hr style="border: 1px solid black; width: 8%;">
     <br>
 </center>
    <div id="mobil">
        <div class="container">
            <table class="table table-responsive table-striped" style="margin:0 30px;">
                <thead class="" style="background-color:#2E86DE; color:white">
                    <tr>
                        <th>No. Sewa</th>
                        <th>Nama Peminjam</th>
                        <th>Tujuan</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Status Pembayaran</th>
                        <th>Status Penyewaan</th>
                        <th colspan="2" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <tr>
                        <td>1234567890</td>
                        <td>Jaresta Fuji</td>
                        <td>Malang</td>
                        <td>2020-11-18 10:00</td>
                        <td>
                          <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-check"></i> Terbayar</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-check"></i> Sudah Selesai</button>
                        </td>
                        <td>
                        <button class="btn btn-sm btn-secondary" disabled><i class="fa fa-dollar"></i> Pembayaran</button>
                        </td>
                        <td>
                        <a class="btn btn-sm btn-info" href="cetak.php" target="_BLANK"><i class="fa fa-print"></i> Cetak</a>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Jaresta Fuji</td>
                        <td>Malang</td>
                        <td>2020-12-20 10:00</td>
                        <td>
                          <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-times-circle"></i> Belum Terbayar</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-times-circle"></i> Belum Selesai</button>
                        </td>
                        <td>
                        <!-- Button trigger modal -->
                          <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-dollar"></i> Pembayaran
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Selesaikan Pembayaran</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: left; font-size:14px">
                                  <strong>Halo User !  Maaf ,</strong> Anda terkena denda di karenakan telah melewati batas tanggal pengembalian !.
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <div class="container">
           <!-- <div class="row"> -->
           <form action="" class="row">
           <div class="form-group col-6">
            <!-- <label for="sopir"><strong> No.Sewa</strong></label> -->
            <input type="date" class="form-control" id="number" name="awal" value="<?php echo date("Y-m-d");?>" style="display:none">
            </div>
           <div class="form-group col-6">

            <input type="date" class="form-control" id="number" name="akhir" value="2020-12-20" style="display:none">
            </div>

       
            <div class="form-group col-6">
            <label for="sopir"><strong> No.Sewa</strong></label>
            <input type="number" class="form-control" id="number" name="number" value="1234567890">
            </div>
            <?php
$hari = ((abs(strtotime ("2020-12-18") - strtotime (date('Y-m-d'))))/(60*60*24));
// menghitung denda
$denda = $hari * 1000;
?>
            <div class="col-6">
            <label for="sopir"><strong> Terlambat (Hari)</strong></label>
            <input type="text" class="form-control" id="number" name="number" value="<?php echo $hari . " Hari (2020-12-18 - " . date('Y-m-d') . ")";?>">
            </div> 
            <?php
// }
            ?>
            <div class="form-group col-6">
            <label for="tanggal_mulai"><strong>Total Harga</strong></label>
            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="150000">
            </div>
            <div class="form-group w-50 col-6">
            <label for="sopir"><strong> Pilih Metode Pembayaran</strong></label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>BCA</option>
            <option>BRI</option>
            <option>BNI</option>
            </select>
            </div>
            <div class="form-group w-50 col-6">
            <label for="tanggal_mulai"><strong>Tanggal Transfer</strong></label>
            <input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="2020-11-18 10:00">
            </div>
            <div class="form-group w-50 col-6">
            <label for="tanggal_selesai"><strong>Upload Bukti</strong></label>
            <input type="file" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="2020-11-19 10:00">
            </div>
           

          </form>

           <!-- </div> -->
        </div>
        
                                </div>
                                <div class="modal-footer">
                                <a class="btn btn-danger btn-md" href="create.php">Batal</a>
                                <a class="btn btn-primary btn-md" href="history.php">Konfirmasi</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                          
                        <td>
                        <a class="btn btn-sm btn-secondary disabled" href="cetak.php" target="_BLANK" ><i class="fa fa-print"></i> Cetak</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Jaresta Fuji</td>
                        <td>Malang</td>
                        <td>2020-11-18 10:00</td>
                        <td>
                          <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-check"></i> Terbayar</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-times-circle"></i> Belum Selesai</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fa fa-print"></i> Cetak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Jaresta Fuji</td>
                        <td>Malang</td>
                        <td>2020-11-18 10:00</td>
                        <td>
                          <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-check"></i> Terbayar</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-times-circle"></i> Belum Selesai</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fa fa-print"></i> Cetak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Jaresta Fuji</td>
                        <td>Malang</td>
                        <td>2020-11-18 10:00</td>
                        <td>
                          <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-check"></i> Terbayar</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-times-circle"></i> Belum Selesai</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fa fa-print"></i> Cetak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Jaresta Fuji</td>
                        <td>Malang</td>
                        <td>2020-11-18 10:00</td>
                        <td>
                          <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-check"></i> Terbayar</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-times-circle"></i> Belum Selesai</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fa fa-print"></i> Cetak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Jaresta Fuji</td>
                        <td>Malang</td>
                        <td>2020-11-18 10:00</td>
                        <td>
                          <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-check"></i> Terbayar</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-times-circle"></i> Belum Selesai</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fa fa-print"></i> Cetak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Jaresta Fuji</td>
                        <td>Malang</td>
                        <td>2020-11-18 10:00</td>
                        <td>
                          <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-check"></i> Terbayar</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-times-circle"></i> Belum Selesai</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-info"><i class="fa fa-print"></i> Cetak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Jaresta Fuji</td>
                        <td>Malang</td>
                        <td>2020-11-18 10:00</td>
                        <td>
                          <button class="btn btn-sm btn-success rounded-pill"><i class="fa fa-check"></i> Terbayar</button>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-danger rounded-pill"><i class="fa fa-times-circle"></i> Belum Selesai</button>
                        </td>
                        <td>
                          <a class="btn btn-sm btn-info" href="cetak.php" target="_BLANK"><i class="fa fa-print"></i> Cetak</a>
                        </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
        <!-- footer -->
        <!-- Footer -->
<footer class="page-footer font-small" style="background-color: #2E86DE; color: white;">
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5" style="padding-top: 30px;">
      <div class="row mt-3">
        <div class="col-md-6 col-lg-7 col-xl-6 mx-auto mb-4 d-flex align-items-center">
          <!-- <img src="assets/img/icon.png" alt="Logo" style="width:15%;" class="img-responsive"> -->
              <strong class="ml-3" style="font-size: 40px; font-family: 'Montserrat';">RentalQ</strong>
        </div>
        <div class="col-md-6 col-lg-5 mx-auto mb-4">
          <div class="row">
            <div class="col-4">
              <h6 class="footer-title">Account</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p class="sub-account" >
                <a href="#!"  style="color: white;">Company</a>
              </p>
              <p class="sub-account">
                <a href="#!" style="color: white;">Developer</a>
              </p>
            </div>
            <div class="col-4" style="padding-right: 10px;">
              <h6 class="footer-title">About Us</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p class="sub-account">
                <a href="#!"  style="color: white;"><i class="fa fa-twitter mr-1" aria-hidden="true"></i> @crazysmile</a>
              </p>
              <p class="sub-account">
                <a href="#!" style="color: white;">Developer</a>
              </p>
            </div>
            <div class="col-4">
              <h6 class="footer-title">Mobile Apps</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p class="sub-account">
                <img src="../assets/img/google_play.png" class="img-google">
              </p>
              <p class="sub-account">
                <img src="../assets/img/app_store.png" class="img-apple">
              </p>
            </div>
           
            </div>
        </div>
      </div>
    </div>
    <center>
      <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80%; background-color: white;">
    </center>
    <!-- Footer Links -->
  
    <!-- Copyright -->
  
    <!-- Copyright -->
    <div class="container" style="padding-bottom: 40px;">
      <span class="">&reg; 2020 Alright Reserved by VeCo Team</span>
      <span class="social"> <i class="fa fa-telegram"></i></span>
      <span class="social"> <i class="fa fa-facebook"></i></span>
      <span class="social"> <i class="fa fa-instagram"></i></span>
      <span class="social">Follow us : </span>
      <div style="clear: both"></div>
  </div>
  </footer>


  <!-- Back to top -->
	<button id="btnTop" class="btnTop" title="Go to top"><i class="fa fa-chevron-up"></i>TOP</button>
	<!-- End of Back to top -->
	<script src="../assets/js/script.js"></script>

</body>
</html>