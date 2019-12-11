<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- main css -->
  <link rel="stylesheet" href="./css/form.css">
  <link rel="stylesheet" href="./css/contactForm.css">
  <link rel="stylesheet" href="./css/main.css">

  <!-- script?? -->

  <script src="./main.js"></script>
  <title>DL portfolio</title>
</head>

<body>
  <!-- nav bar from bootstrap -->

  <!-- concat form from 
http://reusableforms.com/d/e1/html-contact-form-with-validation-and-captcha
-->

  <header class="header">
    <a href=".//index.html" class="logo">
      <img class="favicon" src="./images/logo.png" alt="">
      <p class="logo-font">Daniel Lagos</p>
    </a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href=".//index.html">Home</a></li>
      <li><a href="./contact.html">Contact</a></li>
      <li><a href="./Showcase.html">Showcase</a></li>
      <li><a href="./resume.html">Resume</a></li>
    </ul>
  </header>

  <!-- end of navbar -->


  <!-- Sample code for parallax -->
  <section class="container-fluid parallax flex-center">
    <section class="container ">
      <div class="row flex-center">
        <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 contact " id="form_container">
          <h2 class="text-center">Let's chat</h2>

          <form role="form" method="post" id="reused_form">


            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="name">
                  Your Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="col-sm-6 form-group">
                <label for="email">
                  Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 form-group">
                <label for="message">
                  Message:</label>
                <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000"
                  rows="7"></textarea>
              </div>
            </div>
            <div class="row" style="margin-bottom:30px;">
              <div class="col-sm-5">
                <img src="captcha.php" id="captcha_image" />
                <br /> <a id="captcha_reload" href="#">reload</a>
              </div>
              <div class="col-sm-6">
                <label for="email">Enter the code from the image here:</label>
                <input type="text" class="form-control" required id="captcha" name="captcha">
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 form-group">
                <button type="submit" class="btn btn-lg btn-default pull-right">Send →</button>
              </div>
            </div>

          </form>
          <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Posted your message successfully!</h3>
          </div>
          <div id="error_message" style="width:100%; height:100%; display:none; ">
            <h3>Error</h3>
            Sorry there was an error sending your form.

          </div>
        </div>
    </section>
  </section>






  <script src="./main.js"></script>
</body>

</html>