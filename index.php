
    <?php
        include("layout/header.php");
    ?>
    <!-- <center> -->
        <div id="first" class="scroll"></div>
        <div id="home" class="home" style="background-color: #ececec;">
        
        <div class="container" style="padding-top:100pt;">
            <div class="row">
            <div class="col-6">
                <img src="assets/img/home.png" alt="" width="105%">
            </div>
            <div class="col-1"></div>
            <div class="col-5">
            <div class="card" style="background-color: #ffa502;">
               <div class="card-body">
                    <form action="" class="row">
                        <div class="form-group col-7">
                        <label for="sopir"><strong> Dengan / Tanpa Sopir?</strong></label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Tanpa Sopir</option>
                        <option>Dengan Sopir</option>
                        </select>
                        </div>
                        <div class="col-5">
                        <label for="tujuan"><strong>Tujuan</strong></label>
                        <input type="text" class="form-control" name="tujuan" id="tujuan">
                        </div>
                        <div class="form-group w-50 col-12">
                        <label for="tanggal_mulai"><strong>Tanggal Mulai Rental</strong></label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group w-50 col-12">
                        <label for="tanggal_selesai"><strong>Tanggal Selesai</strong></label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="2020-12-22">
                        </div>
                        <div class="col-12 mt-3">
                            <a class="btn btn-primary btn-md" href="pages/list-mobil.php" style="width:100%">Cari Mobil</a>
                        </div>
                        <div class="col-3"></div>

                    </form>
                </div>
               </div>

            </div>
            </div>
        </div>
        </div>
        <br>
        <div class="scroll" id="list-mobil"></div>
<section class="carousel slide mt-3 mb-3" data-ride="carousel" id="postsCarousel">
    <!-- <div class="container">
        <div class="row">
            <div class="col-xs-12 text-md-right lead">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div> -->
        <div class="carousel-inner">
        <div class="container-fluid  carousel-item active">
            <div class="row m-5 ">
                <div class="col-12 col-sm-6 col-xl-3 card-list">
                    <a class="link" href="info-mobil.php" style="text-decoration: none;">
                        <div class="card card-mobil">
                            <img class="img-responsive img-destination" alt="a" src="assets/img/car.jpg" >
                            <div class="tag">
                                <div class="text-tag">
                                    <h6 class="listWisata"><center> Daihatsu Terios </center></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 card-list">
                    <a class="link" href="info-mobil.php" style="text-decoration: none;">
                        <div class="card card-mobil">
                            <img class="img-responsive img-destination" alt="a" src="assets/img/civic2020.jpeg" >
                            <div class="tag">
                                <div class="text-tag">
                                    <h6 class="listWisata"><center> Honda Civic</center></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 card-list">
                    <a class="link" href="info-mobil.php" style="text-decoration: none;">
                        <div class="card card-mobil">
                            <img class="img-responsive img-destination" alt="a" src="assets/img/fortuner.jpeg" >
                            <div class="tag">
                                <div class="text-tag">
                                    <h6 class="listWisata"><center>Fortuner </center></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 card-list">
                    <a class="link" href="info-mobil.php" style="text-decoration: none;">
                        <div class="card card-mobil">
                            <img class="img-responsive img-destination" alt="a" src="assets/img/honda-brio.jpeg">
                            <div class="tag">
                                <div class="text-tag">
                                    <h6 class="listWisata"><center>Honda Brio </center></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
        <div class="container-fluid  carousel-item ">
            <div class="row m-5 ">
                <div class="col-12 col-sm-6 col-xl-3 card-list">
                    <a class="link" href="info-mobil.php" style="text-decoration: none;">
                        <div class="card card-mobil">
                            <img class="img-responsive img-destination" alt="a" src="assets/img/innova2020.jpeg">
                            <div class="tag">
                                <div class="text-tag">
                                    <h6 class="listWisata"><center>Innova </center></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 card-list">
                    <a class="link" href="info-mobil.php" style="text-decoration: none;">
                        <div class="card card-mobil">
                            <img class="img-responsive img-destination" alt="a" src="assets/img/xenia2020.jpeg">
                            <div class="tag">
                                <div class="text-tag">
                                    <h6 class="listWisata"><center>Xenia </center></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 card-list">
                    <a class="link" href="info-mobil.php" style="text-decoration: none;">
                        <div class="card card-mobil">
                            <img class="img-responsive img-destination" alt="a" src="assets/img/new-veloz.jpeg">
                            <div class="tag">
                                <div class="text-tag">
                                    <h6 class="listWisata"><center>New Veloz </center></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 card-list">
                    <a class="link" href="info-mobil.php" style="text-decoration: none;">
                        <div class="card card-mobil">
                            <img class="img-responsive img-destination" alt="a" src="assets/img/yaris.jpeg">
                            <div class="tag">
                                <div class="text-tag">
                                    <h6 class="listWisata"><center>Yaris </center></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
        </div>
        <center>
            <a href="login.php" class="btn btn-primary">Sewa Sekarang</a>
        </center>
</section>
   
        <br>
        <br>
        <br>
        <br>
        <div class="scroll" id="about"></div>
        <!-- <section > -->
            <div style="background-color: #ececec">
                <div class="container about" style=" padding-top: 100px;">
            <center><h2>Tentang Kami</h2></center>
            <hr style="border: 1px solid black; width: 8%;">
            <p style="text-align: center;">
                RentalQ adalah sebuah website layanan penyedia jasa peminjaman mobil untuk suatu kebutuhan atau kegiatan tertentu , yang tentunya mempunyai tiga fitur andalan diantaranya 
            </p>
            <footer class="mt-5">
                <div class="row" style="">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fa fa-user icon-card mb-4 icon-about" style="color:grey"></i>
                                <h3 class="card-title">Terpercaya</h3>
                                <p class="card-text">RentalQ telah melayani ribuan customer dan bekerja sama dengan berbagai perusahaan lain hanya untuk memberikan pelayanan yang optimal kepada anda</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fa fa-television icon-card mb-4 icon-about"  style="color:grey"></i>
                                <h3 class="card-title">Cepat dan Terkini</h3>
                                <p class="card-text">RentalQ memudahkan Anda dalam proses pemesanan dan pembayaran dilakukan secara online. Setiap proses kami lakukan dengan cepat dan tepat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card w-100 text-center">
                            <div class="card-body">
                                <i class="fa fa-car icon-card mb-4 icon-about"  style="color:grey"></i>
                                <h3 class="card-title">Banyak Pilihan/Varian</h3>
                                <p class="card-text">RentalQ memberikan banyak rekomendasi varian kepada Anda untuk memilih dari berbagai tipe , merk, dan harga sewa sehingga sesuai dengan kebutuhan Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
                </div>
            </div>
        <!-- <hr style="border: 2px solid #efefef;"> -->

    <!-- </section> --> 
 
        <!-- testi -->
        <div id="testi" class="scroll"></div>
            <div class="" style="background-color: white; padding:50px 0 90px 0;">
                <div class="container">
                <header class="text-center mt-3">
                    <br>
                    <br>
                    <h2>Testimoni</h2>
                <hr style="border: 1px solid black; width: 8%;">
                </header>
        
                <br />
        
                <content class="mt-3">

                    <div class="row">
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                            <img src="assets/img/testi.png" class="img-responsive w-50">
                        </div>
        
                        <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 pl-5 pb-5 pr-5 text-right">
                            <h3>Afita Dewi</h3>
                            <hr class="float-right" />
                            <p class="float-right">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat."</p>
                        </div>
                    </div>
                    <br />
                    <div class="row mt-5">
                        <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 pl-5 pb-5 pr-5 text-left">
                            <h3>Agustin</h3>
                            <hr class="float-left" />
                            <p class="float-left">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat."</p>
                        </div>
        
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                            <img src="assets/img/testi.png" class="img-responsive w-50 float-right">
                        </div>
                    </div>
        
                    <br />
        
                </content>
            </div>
            </div>
    

        <!-- footer -->
        <!-- Footer -->
        <div class="scroll" id="kontak" ></div>
<footer class="page-footer font-small" style="background-color: #2E86DE; color: white;">
    <!-- Footer Links -->
    <div class="container text-center text-md-left" style="padding-top: 30px;">
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
                <img src="assets/img/google_play.png" class="img-google">
              </p>
              <p class="sub-account">
                <img src="assets/img/app_store.png" class="img-apple">
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
    <script src="assets/js/script.js"></script>
    <script>
        (function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    
})(jQuery);
    </script>
</body>
</html>