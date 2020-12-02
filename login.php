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

    div#card-login {
        border-radius: 10px;
        margin-top: 180px;
        background-color: #2E86DE ;
        color: white;
        width: 26rem;
        height: 28.5rem;
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

    div#social-login p.text-center a {
        font-size: 30px;
        margin: 0 10px;
        text-decoration: none;
    }

    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  /*overflow-x: hidden;*/
}

/* Icon Theme Toggler */

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

/* #btn-submit:hover{
    background-color: black;
} */

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

            <div id="card-login">
                <form method="" action="">

                    <h4 class="text-center mb-4 mt-5" style="overflow-y: hidden;">Masuk ke Akun</h4>

                    <div class="form-label-group w-75">
                        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail Address" required autofocus>
                        <label for="email">Email Address</label>
                    </div>

                    <div class="form-label-group w-75">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" id="checkbox">
                            <span class="ml-3">Remember Me
                        </label>
                            
                                <a class="float-right text-light" href="">
                                    Forgot Password
                                </a>
                            
                            </span>
                    </div>

                    <button type="submit" id="btn-submit" class="btn btn-primary w-75 mt-2" style="background-color: white; color:#2E86DE;">
                       Masuk
                    </button>

                    <div id="social-login">
                        <p class="mt-4 text-center">Or Sign In With</p>
                        <p class="text-center" style="overflow-y: hidden;">
                            <a href=""><i class="fa fa-google text-danger"></i></a>
                        </p>
                    </div>
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