<!doctype html>
<html lang="en">
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaset Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .nav-link {
        font-size: 1rem;
      }

      .navbar-bottom {
        position: fixed;
        bottom: 0;
        width: 100%;
      }

      .image-logo {
        background: url('/img/background.jpg');
        background-size: cover;
        height: 50vh;
        background-position: center;
        position: relative;
        width: 100%;
        align-items: end;
        border-radius: 100px;
        display: flex;
        justify-content: center;
        margin: 2em 0;
      }

      .content {
        margin: 3% 1%;
      }

      .card-box {
        background-color: whitesmoke;
        outline-style: ridge;
        border-radius: 20px;
        padding: 1em;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s;
        height: 100%;
      }

      .card-box:hover {
        transform: scale(1.05);
      }

      .judul {
        display: flex;
        justify-content: center;
      }

      .back {
        position: absolute;
        margin-top: 2%;
        cursor: pointer;
        z-index: 100;
      }

      .navbar-brand img {
        max-width: 100%;
        height: auto;
      }

      .navbar-content {
        text-align: center;
        color: white;
      }

      .footer-content {
        color: white;
      }

      .footer-content h1 {
        font-size: 1em;
        text-align: left;
      }

      .footer-content p {
        text-align: justify;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-black">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="/Museum/home.html">
          <img src="/Img/MMI2.jpg" alt="Logo" role="button" width="70" height="70" class="d-inline-block align-text-top">
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
        <img src="/Img/piringan_hitam_1x1-removebg-preview.png" style="align-items: center; width: 15%;">
    </div>
    <div class="ukuran">
        <h1 style="text-align: center; margin-top: -1%;">Piringan Hitam</h1>
    </div>
    <div class="content row">
        @foreach ($piringanhitam as $piringanhitams)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card-box h-100">
                <h3>Lagu: {{$piringanhitams->lagu}}</h3>
                <p>Deskripsi: {{$piringanhitams->deskripsi}}</p>
                <p>Rak: {{$piringanhitams->rak}}</p>
            </div>
        </div>
        @endforeach
    </div>

    <nav class="navbar navbar-expand-lg bg-black mt-4 navbar-bottom">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
          <img src="/Img/skrinsyot leflok.png" alt="Logo" style="width: 60%;" class="d-inline-block align-text-bottom">
        </a>
        <div class="footer-content" style="width: 70%; margin: auto; padding-right: 5%;">
          <h1>Museum Musik Indonesia</h1>
          <p>
            Gedung Penunjang Museum Mpu Purwa lantai 2<br>
            Jl. Soekarno Hatta Perum Griya Shanta Blok B No.210 Kelurahan Mojolangu, Kecamatan Lowokwaru Kota Malang 65141<br>
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
