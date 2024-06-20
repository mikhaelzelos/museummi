<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .nav-link {
        font-size: 1rem;
      }

      .navbar-bottom {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #000;
        padding: 1rem;
      }

      .image-logo {
        background: url('/img/background.jpg') center/cover;
        height: 50vh;
        width: 500px;
        display: flex;
        justify-content: center;
        align-items: end;
        position: relative;
        border-radius: 0 100px 100px 0;
        margin-bottom: 2rem;
      }

      .image-logo.image-logo-3 {
        border-radius: 100px 0 0 100px;
        margin-top: 100px;
      }

      .box {
        display: flex;
        flex-wrap: wrap;
        gap: 1em;
        margin: 3% 1%;
        justify-content: center;
      }

      .box > div {
        width: 290px;
        height: 230px;
        background-color: whitesmoke;
        border-radius: 20px;
        outline-style: ridge;
        position: relative;
        flex-grow: 1;
        padding: 1rem;
      }

      .judul {
        display: flex;
        justify-content: center;
        margin-top: 1rem;
      }

      .back {
        position: absolute;
        margin-top: 2%;
        cursor: pointer;
        z-index: 100;
      }

      .footer-content {
        width: 70%;
        margin: auto;
        color: white;
      }

      .footer-content h1 {
        font-size: 1em;
        text-align: left;
      }

      .footer-content p {
        text-align: justify;
      }

      .footer-logo {
        width: 60%;
      }
    </style>
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-black">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="/Museum/home.html">
          <img src="/Img/MMI2.jpg" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white me-3" aria-current="page" href="#">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white me-3" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="back" onclick="goBack()">
      <img src="/Img/tombol_back-removebg-preview.png" style="align-items: center; width: 30%;">
    </div>

    <div class="judul">
      <img src="/Img/Alat musik modern.png" style="align-items: center; width: 15%;">
    </div>
    <div class="ukuran">
      <h1 style="text-align: center; margin-top: 1%;">Alat Musik Modern</h1>
    </div>

    <div class="box">
      @foreach ($alatmusik_modern as $alatmusikmodern)
      <div>
        <h1>Nama Instrumen: {{$alatmusikmodern->nama_instrumen}}</h1>
        <h1>Quantity: {{$alatmusikmodern->quantity}}</h1>
      </div>
      @endforeach
    </div>

    <nav class="navbar navbar-expand-lg bg-black navbar-bottom">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
          <img src="/Img/skrinsyot leflok.png" alt="Logo" class="footer-logo">
        </a>
        <div class="footer-content">
          <h1>Museum Musik Indonesia</h1>
          <p>
            Gedung Penunjang Museum Mpu Purwa lantai 2<br>
            Jl.Soekarno Hatta Perum Griya Shanta Blok B No.210 Kelurahan Mojolangu, Kecamatan Lowokwaru Kota Malang 65141<br>
            WA: 081 80 3230 472<br>
            Buka pukul: 09.00-16.00 WIB, Senin dan Hari Besar libur<br>
            Email: museummusikindonesia@yahoo.co.id<br>
          </p>
        </div>
        <a class="navbar-brand text-white" href="#" style="padding-right: 10px;">
          <img src="/Img/MMI2.jpg" alt="Logo" style="width: 20%; margin-left: 70%;">
        </a>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZO/NUNyXtH9reG2j70DXtCrOFEhz0eI9Wpr9WBUa5nr0Edsvkh0fH9vGZmnA+Elh" crossorigin="anonymous"></script>
  </body>
</html>
