<style type="text/css">
        :root {
        --input-padding-x: .75rem;
        --input-padding-y: .75rem;
    }

    div.col-md-8 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    div#card-register {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        margin-top: 160px;
        background-color: #2E86DE ;
        color: white;
        width: 26rem;
        height: 29.5rem;
        opacity: 0.95;
        box-shadow: 1px 1px 7.5px #c0c0c0;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
        margin-left: 12.5%;
    }

    .form-label-group > input,
    .form-label-group > label {
        padding: var(--input-padding-y) var(--input-padding-x);
        height: 45px;
        overflow-y: hidden;
    }

    .form-label-group > label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        line-height: 1.5;
        color: #495057;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown) ~ label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }

    div form div.checkbox {
        margin-left: 12.5%;
        margin-right: 12.5%;
    }

    div form button.btn.btn-primary.w-75 {
        margin-left: 12.5%;
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      /*overflow-x: hidden;*/
    }

    body.default-theme {

      
    }

    svg#wave-background {
      position: absolute;
      left: 0;
      bottom: 0;
      background: linear-gradient(180deg, #ffffff 0%, #ffffff 60%, #0099ff 60%, #0099ff 100%);
    }

    svg#wave-background path {
      stroke: none;
      fill: #0099ff;
      transform: scale(1.1);
    }


    /* Navbar */

    nav.navbar {
      width: 100vw;
      background-color: #4A69BD;
      position: fixed;
      z-index: 1000;
    }

    nav.navbar a.navbar-brand img {
        width: 35px;
        height: 30px;
    }

    nav.navbar a.navbar-brand strong {
        color: #ffffff;
    }

    nav.navbar ul.navbar-nav a {
      text-decoration: none;
      color: #ffffff;
      margin: 0 15px;
    }

    nav.navbar ul.navbar-nav.ml-auto a {
      color: #ffffff;
    }

    /* Icon Theme Toggler */

    /*div#theme-toggler {
      width: 50px;
      height: 50px;
      padding: 10px;
      background-color: #303f9f;
      border-radius: 50px;
      position: fixed;
      bottom: 60px;
      right: 25px;
      color: #ffffff;
      font-size: 20px;
      text-align: center;
      cursor: pointer;
      transition: 0.5s;
    }

    div#theme-toggler i {
      margin-top: 5px;
    }
    */
    /* Footer */

    div#footer {
      width: 100%;
      height: 3rem;
      background-color: #2E86DE;    
      color: #ffffff;
      position: fixed;
      bottom: 0;
      left: 0;
      display: flex;
      align-items: center;
    }

    div#footer span i.fa {
      padding: 5px 5px;
      margin: 0 5px;
      background-color: var(--secondary-bg-color);
      border-radius: 50px;
      font-size: 10px;
      color: var(--main-text-color);
    }

}
</style>
<?php
        include("layout/header.php");
       ?>
   <div style="background-color: #F4F6F9;height:100%">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div id="card-register">
                <form method="" action="">

                    <h3 class="text-center" style="overflow-y: hidden;">Daftar Akun</h3>


                    <div class="form-label-group mt-4 w-75">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required autofocus>
                        <label for="name">Name</label>
                    </div>

                    <div class="form-label-group w-75">
                        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail Address" required>
                        <label for="email">Email Address</label>
                    </div>

                    <div class="form-label-group w-75">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="form-label-group w-75">
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Confirm Password" required>
                        <label for="password-confirm">Confirm Password</label>
                    </div>

                    <div class="checkbox" >
                        <label>
                            <input type="checkbox" value="remember-me" required><span class="ml-3" >I agree to the Term of Use , Privacy Police , and Refund Police.</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary w-75 mt-2" style="background-color: white; color:#2E86DE;">
                        Daftar
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
   </div>

    <div id="footer">
            <div class="container">
                <span class="float-left">&reg; 2020 Alright Reserved by VeCo Team</span>
                <span class="float-right"><i class="fa fa-telegram"></i></span>
                <span class="float-right"><i class="fa fa-facebook"></i></span>
                <span class="float-right"><i class="fa fa-instagram"></i></span>
                <span class="float-right">Follow us : </span>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>