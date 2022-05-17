@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/jpg" href="assets/logo/logo T.png" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- My css -->
    <link rel="stylesheet" href="./css/style.css" />
    <title>My Project</title>
  </head>
  <body>
    <div class="container">
      <div class="blur"></div>
    <div class="container">
      <div class="row boxfilms-web">
        <div class="col-md-7">
          <img
            class="img-fluid"
            src="http://127.0.0.1:8000/admin/images/image/web/Forum_Apps.png"
            alt="boxfilm-web"
          />
        </div>
        <div class="col-md-5 boxfilms-caption">
          <h2>Forum Web Apps</h2>
          <p>Forum web based. The stack :</p>
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>Javascript</li>
            <li>Bootstrap</li>
          </ul>
        </div>
      </div>
      <div class="row furnitureOrder-web flex-column-reverse flex-md-row">
        <div class="col-md-5 furnitureOrder-caption">
          <h2>Calculator Web</h2>
          <p>Calculator web based. The stack :</p>
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>Javascript</li>
          </ul>
          
        </div>
        <div class="col-md-7">
          <img
            class="img-fluid"
            src="http://127.0.0.1:8000/admin/images/image/web/web_calculator.png"
            alt="furniture-web"
          />
        </div>
      </div>
      <div class="row furnitureOrder-web flex-column-reverse flex-md-row">
      <div class="col-md-7">
          <img
            class="img-fluid"
            src="http://127.0.0.1:8000/admin/images/image/web/Web_fortofolio.png"
            alt="cekginjal-web"
          />
        </div>
        <div class="col-md-5 calculator">
          <h2>My Portofolio Web</h2>
          <p>
            My Portofolio web based. The stack :
          </p>
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>Bootstrap</li>
            <li>JavaScript</li>
          </ul>
        </div>
      </div>
      <div class="row fortofolio flex-column-reverse flex-md-row">
        <div class="col-md-5 machineLearning-caption">
        </div>
      </div>
      <div class="design-apps">
        <h2>Mobile Apps</h2>
        <img
          class="img-fluid"
          src="http://127.0.0.1:8000/admin/images/image/web/apps_quote.png"
          alt="saving-app"
        />
        <img
          class="img-fluid"
          src="http://127.0.0.1:8000/admin/images/image/web/apps_anime_movie.png"
          alt="meals-app"
        />
        <img
          class="img-fluid"
          src="http://127.0.0.1:8000/admin/images/image/web/info_buku.png"
          alt="meals-app"
        />
      </div>
      <div class="footer">
        <h2>Get in touch</h2>
        <div class="social-media">
          <a href="https://www.instagram.com/tiwias_/"
            ><img src="http://127.0.0.1:8000/admin/images/image/icon/instagram.svg" alt="instagram"
          /></a>
          <a href="https://github.com/tiwisetiyaningsih"
            ><img src="http://127.0.0.1:8000/admin/images/image/icon/github.svg" alt="github"
          /></a>
          <a href="https://dribbble.com/tiwias_"
            ><img src="http://127.0.0.1:8000/admin/images/image/icon/dribbble.svg" alt="dribbble"
          /></a>
        </div>
        <p><strong>tiwias_ &copy; 2022</strong></p>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="http://127.0.0.1:8000/resources/js/script.js"></script>
    </div>
  </body>
</html>
@endsection