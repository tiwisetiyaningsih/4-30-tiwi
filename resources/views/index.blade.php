@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/jpg" href="http://127.0.0.1:8000/image/logo/logo_web.png" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- My css -->
    <link rel="stylesheet" href="./css/style.css" />

    <title>My Portofolio</title>
  </head>
  <body>
    <div class="blur"></div>
    <div class="container">
      <div class="hero">
        <div class="row flex-column-reverse flex-md-row">
          <div class="col-md-7">
            <h4>Hi, i'm Tiwi Arum Setyaningsih</h4>
            <h2>Frontend Developer</h2>
            <p>
              I'm from Cilacap and I am a highly motivated and enthusiastic individual. 
              Skilled in building software systems with the laravel framework using the PHP, 
              HTML and JavaScript programming languages. I'm looking for an opportunity to develop
              my skills to work in front-end programming.
            </p>
            <a
              href="https://drive.google.com/file/d/1D_sQ2KrlmlgYfa7ab0X7oA0EUcxxnB-7/view?usp=sharing"
              class="btn btn-primary contact"
              >My CV</a
            >
          </div>
          <div class="col-md-5">
            <img
              class="hero_img img-fluid"
              src="http://127.0.0.1:8000/admin/images/image/hero/tiwijsTS.png"
              alt="hero"
            />
          </div>
        </div>
      </div>
      <div class="project" id="project">
        <h2 class="web-project">Forum, calculator & Portofolio Web Apps</h2>
        <p class="project-caption">
          That is the best project I have ever made, which a web design that my
          design and I implemented with HTML, PHP, CSS and Javascript, and Bootstrap.
        </p>
        <div class="row">
          <div class="col-md-4">
            <img
              class="boxfilms img-fluid"
              src="http://127.0.0.1:8000/admin/images/image/web/Forum_Apps.png"
              alt="boxfilms"
            />
            <p class="web-caption">Forum Web</p>
          </div>
          <div class="col-md-4">
            <img
              class="furniture img-fluid"
              src="http://127.0.0.1:8000/admin/images/image/web/web_calculator.png"
              alt="furniture"
            />
            <p class="web-caption">Calculator</p>
          </div>
          <div class="col-md-4">
            <img
              class="furniture img-fluid"
              src="http://127.0.0.1:8000/admin/images/image/web/Web_fortofolio.png"
              alt="furniture"
            />
            <p class="web-caption">Portofolio Web</p>
          </div>
        </div>
        <!-- <div class="blur1"></div> -->
        <h2 class="mobile-project">Mobile Apps</h2>
        <p class="project-caption">
          My exploration design for UI mobile apps about choosing the color,
          make layout apps, Figma, and much more.
        </p>
        <div class="row">
          <div class="col-md-4">
            <img
              class="saving img-fluid"
              src="http://127.0.0.1:8000/admin/images/image/web/apps_quote.png"
              alt="saving-app"
            />
            <p class="app-caption">Quote Apps</p>
          </div>
          <div class="col-md-4">
            <img
              class="meals img-fluid"
              src="http://127.0.0.1:8000/admin/images/image/web/apps_anime_movie.png"
              alt="meals-app"
            />
            <p class="app-caption">Note Anime Movies Apps</p>
          </div>
          <div class="col-md-4">
            <img
              class="meals img-fluid"
              src="http://127.0.0.1:8000/admin/images/image/web/info_buku.png"
              alt="meals-app"
            />
            <p class="app-caption">Info Buku Apps</p>
          </div>
        </div>
      </div>
      <div class="skills" id="skills">
        <h2 class="tools-skills">Tools & Skills</h2>
        <div class="blur2"></div>
        <div class="programming text-center">
          <img src="http://127.0.0.1:8000/admin/images/image/icon/html.svg" alt="html" />
          <img src="http://127.0.0.1:8000/admin/images/image/icon/css.svg" alt="css" />
          <img src="http://127.0.0.1:8000/admin/images/image/icon/javascript.svg" alt="javascript" />
          <img src="http://127.0.0.1:8000/admin/images/image/icon/php.svg" alt="php" />
          <img src="http://127.0.0.1:8000/admin/images/image/icon/python.svg" alt="python" />
          <img src="http://127.0.0.1:8000/admin/images/image/icon/bootstrap.svg" alt="bootstrap" />
          <img class="mysql" src="http://127.0.0.1:8000/admin/images/image/icon/mysql.svg" alt="mysql" />
        </div>
        <div class="tools text-center">
          <img src="http://127.0.0.1:8000/admin/images/image/icon/photoshop.svg" alt="photoshop" />
          <img src="http://127.0.0.1:8000/admin/images/image/icon/illustrator.svg" alt="illustrator" />
          <img class="figma" src="http://127.0.0.1:8000/admin/images/image/icon/figma.svg" alt="figma" />
        </div>
      </div>
      <div class="footer">
        <h2>Contact</h2>
        <div class="social-media">
          <a href="https://www.instagram.com/tiwias_/"
            ><img src="http://127.0.0.1:8000/admin/images/image/icon/instagram.svg" alt="instagram"
          /></a>
          <a href="https://github.com/tiwisetiyaningsih"
            ><img src="http://127.0.0.1:8000/admin/images/image/icon/github.svg" alt="github"
          /></a>
          <a href="https://dribbble.com/tiwias_"
            ><img src="http://127.0.0.1:8000/admin/images/image/icon/dribbble.svg" alt="github"
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
    <script src="http://127.0.0.1:8000/js/script.js"></script>
  </body>
</html>
@endsection