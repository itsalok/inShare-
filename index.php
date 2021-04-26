<!doctype html>
<html lang="en">

<head>
  <title>inShare - A file sharing website</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Assets/css/style.css">
  <style>
    .login:hover{
      color:#fff;
      text-decoration:none;
    }
    .signup:hover{
      text-decoration:none;
    }
    
  </style>
</head>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
      <a class="navbar-brand" href="#">
        <img src="Assets/image/logo.png" width="170" height="60" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-2">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <span class="nav-vr-line">|</span>
        <form class="form-inline ml-3">
          
            <button class="btn btn-outline-dark mx-2 my-2 my-sm-0" type="login">
            <a href="signup.php" class="login">Log in</a>
            </button>
        
            <button class="btn btn-fill mx-2 my-2 my-sm-0" type="signup">
            <a href="signup.php" class="signup" style="color:#fff;">Sign up</a>
            </button>
          
        </form>
      </div>
    </nav>
  </div>

  <div class="container-fluid wrapper" id="home">
    <div class="row">
      <div class="col-md-6 main-box">
        <h1>SHARING MADE EASY.</h1>
        <p>inShare is a hassle-free file sharing website.<br> Share files up to 40MB. Start
          using it today!</p>
        <div class="btn-area mt-4">
          <a href="signup.php">
            <button class="btn btn-lg my-2 my-sm-0 start-btn" type="SignUp">Start Sharing - It's Free!
              <i class="fa fa-caret-right ml-3"></i>
            </button>
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img class="img-fluid img1" src="Assets/image/image1.png" alt="">
        </div>
      </div>
    </div>
    <div class="wave-area">
      <div class='wave-box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
      </div>
    </div>
  </div>

  <div class="container-fluid p-5 service-area mt-5" id="service">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1><span class="underline--magical">Why choose us</span></h1>
      </div>
    </div>

    <div class="row text-center py-5">

      <div class="col-md-4 mb-4">
        <h2 class="my-3 h2"><span class="underline--magical2">Easy file sharing</span></h2>
        <p> Just add your files, specify the recipients and you're good to go.</p>

        <img class="rounded-circle z-depth-2" alt="100x100"
          src="https://www.goby.co/assets/icon-hand-d4e228ed63fb93bdfcdb5aa6b78ca95d334bd9f01c2c510b9d4e76460a6e2eb8.png"
          data-holder-rendered="true" width="180" height="180">

      </div>
      <div class="col-md-4 mb-4">
        <h2 class="my-3 h2"><span class="underline--magical2">Fast file sharing</span></h2>
        <p>It uses state-of-the-art technology to make your file sharing as fast as possible.</p>
        <img class="rounded-circle z-depth-2" alt="100x100"
          src="https://www.goby.co/assets/icon-calendar-84865aa7ee998408d14ff647a270d178ac3c1da5f5d9e6e2ed86ae35a2c43330.png"
          data-holder-rendered="true" width="180" height="180">

      </div>

      <div class="col-md-4 mb-4">

        <h2 class="my-3 h2"><span class="underline--magical2">Free file sharing</span></h2>
        <p>It is totally free to use. File sharing up to 40MB will be free forever!</p>
        <img class="rounded-circle z-depth-2" alt="100x100"
          src="https://www.goby.co/assets/icon-smile-ed3aec2d082711b3bd0ff051712c0e85aef7523efeea12eee291da20970151d6.png"
          data-holder-rendered="true" width="180" height="180">
      </div>
    </div>
  </div>

  <div class="container-fluid mb-5" id="about">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img class="img-fluid img1" src="Assets/image/image3.png" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-6 col-sm-6 px-3">
            <img class="img-fluid" src="Assets/image/icon1.png" height="90" width="90" alt="">
            <h4>Send files for free</h4>
            <p>inShare is and will remain totally free to use. So the basic features (File transfers up to 40MB) will be free forever! Start using it today!</p>
          </div>
          <div class="col-6 col-sm-6 px-3">
            <img class="img-fluid" src="Assets/image/icon2.png" height="90" width="90" alt="">
            <h4>Easy file transfer</h4>
            <p>inShare has great features, but the best feature is probably that sending files is so easy that anyone can use it. Just add your files, specify the recipients and you're good to go.</p>
          </div>

          <!-- Force next columns to break to new line -->
          <div class="w-100"></div>

          <div class="col-6 col-sm-6 px-3"><img class="img-fluid" src="Assets/image/icon4.png" height="90" width="90"
              alt="">
            <h4>Fast file sharing</h4>
            <p>inShare uses state-of-the-art technology to make your file sharing as fast as possible. Transfers are already being compressed on your computer to reduce the amount of data to be sent.</p>
          </div>
          <div class="col-6 col-sm-6 px-3"><img class="img-fluid" src="Assets/image/icon5.png" height="90" width="90"
              alt="">
            <h4>Secure online data transfer</h4>
            <p>inShare is optionally using end-to-end encryption to secure your transferred files. Only recipients that know the password can open your transfer.</p>
          </div>
        </div>
      </div>


    </div>
  </div>

  <div class="container-fluid my-5 wrapper2">
    <div class="row">
      <div class="col-md-6 p-5">
        <img class="img-fluid" src="Assets/image/icon3.png" height="90" width="90" alt="">
        <h1>Send files via e-mail</h1>
        <p style="font-size: 1.3em;">The maximum file size in e-mail attachments is 40 MB. With inShare, you can easily send pdf files, images, or any document files using e-mail. All you need to know is the receipient's email address and you're good to go.</p>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img class="img-fluid img1" src="Assets/image/image2.png" alt="">
        </div>
      </div>
    </div>
  </div>



  <!--FOOTER-->
  <footer class="footer-section" id="contact">
    <div class="container">
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-lg-4">
            <div class="footer-widget">
              <div class="footer-logo">
                <a class="navbar-brand" href="#">
                  <img src="Assets/image/logo.png" width="170" height="60" class="d-inline-block align-top" alt="">
                </a>
              </div>
              <div class="footer-text">
                <p>Share is a hassle-free file sharing website.<br> Share files up to 40 MB. Start
                  using it today!</p>
              </div>
              <div class="footer-social-icon mt-4">
                <div class="footer-widget-heading">
                  <h3>Follow us</h3>
                </div>
                <a href="#"><i class="fa fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fa fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fa fa-instagram insta-bg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-7 col-lg-7 col-md-7 ml-auto">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Contact us</h3>
              </div>
              <div class="subscribe-form">
                <form action="#">
                  <input type="text" placeholder="Email Address">
                </form>
                <div class="form-group mt-3">
                  <textarea class="form-control message-area" name="message" placeholder="Message" rows="3"
                    data-form-field="Message"></textarea>
                </div>
                <a href="#">
                  <button class="btn btn-fill mx-2 my-2 my-sm-0 button" type="send">Send</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>