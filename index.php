
    <?php
        include("layout/header.php");
    ?>
    <!-- <center> -->
        <div id="first" class="scroll"></div>
        <div id="home" class="home" style="background-color: #F4F6F9;">
            <div id="leftSideHome" class="w-50 float-left">
                <h2>Apa itu RentalQ ?</h2>
                <hr />
                <p class="mt-4">Sebagian besar Sistem Rental Mobil saat ini menggunakan sistem manual, maka dari itu kami akan membuat sistem user interface misalnya dalam pengelolaan data pelanggan reservasi mobil per harinya, pengelolaan pemasukan per harinya, dan lain-lain. </p>
            </div>
    
            <div id="rightSideHome" class="float-left" style="width: 45%; margin-top: 120px;">
                <br>
                <img src="assets/img/Untitled-13.png" class="float-right img-responsive">
            </div>
           

        </div>
        <br>
        <div class="scroll" id="about"></div>
        <!-- <section > -->
            <div class="container about" style="background-color: white; padding-top: 100px;">
            <center><h2>Tentang Kami</h2></center>
            <hr style="border: 1px solid black; width: 8%;">
            <p style="text-align: center;">
                VeCo is Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <footer class="mt-5">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fa fa-television icon-card mb-4 icon-about"></i>
                                <h3 class="card-title">Best Project</h3>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fa fa-star icon-card mb-4 icon-about"></i>
                                <h3 class="card-title">Best Project</h3>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card w-100 text-center">
                            <div class="card-body">
                                <i class="fa fa-group icon-card mb-4 icon-about"></i>
                                <h3 class="card-title">Best Project</h3>
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <hr style="border: 2px solid #efefef;">

    <!-- </section> --> 
    <div class="scroll" id="sewa"></div>

        <br>
        <br>
        <br>
        <br>
        <!-- sewa mobil -->
        <!-- <div style="background-color: #F4F6F9; padding:50px"> -->
        <div class="container" style="padding-bottom: 50px;">
            <div class="container card w-75">
                <div class="card-body">
                    <form action="" class="row">
                        <div class="form-group w-50 col-6">
                        <label for="sopir"><strong> Dengan atau Tanpa Sopir?</strong></label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Tanpa Sopir</option>
                        <option>Dengan Sopir</option>
                        </select>
                        </div>
                        <div class="col-6"></div>
                        <div class="form-group w-50 col-6">
                        <label for="tanggal_mulai"><strong>Tanggal Mulai Rental</strong></label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                        </div>
                        <div class="form-group w-50 col-6">
                        <label for="tanggal_selesai"><strong>Tanggal Selesai</strong></label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
                        </div>
                        <div class="col-5"></div>
                        <div class="col-6 mt-3">
                            <a class="btn btn-primary btn-md" href="pages/list-mobil.php">Cari Mobil</a>
                        </div>
                        <div class="col-3"></div>

                    </form>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <br>
        <br>
        <!-- testi -->
        <div id="testi" class="scroll"></div>
            <div class="" style="background-color: #F4F6F9; padding:50px 0 90px 0;">
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

</body>
</html>