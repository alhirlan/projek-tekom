<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome SiPenDoa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}"/>
  </head>
  <body>
    <div class="container">
      <div class="nav-container">
        <div class="left">
          <img src="images/SVNIH.png" alt="" />
        </div>

        <div class="right">
          <nav class="menu-items">
            <a href="/about">About</a>
            <a href="#">Ormawa</a>
            <a href="#">Komdisma</a>
            <a class="btn dark" href="/contact">Contact</a>
          </nav>

          <div class="dark-switch active">
            <img src="images/dark-switch.svg" alt="" />
          </div>

          <div class="light-switch">
            <img src="images/light-switch.svg" alt="" />
          </div>
        </div>
      </div>

      <header class="hero-section">
        <div class="left">
          <h1>Sistem Pengesahan 
            Dokumen ORMAWA</h1>
          <p class="sub-heading">
            Sistem ini digunakan untuk keperluan Pengesahan, 
            Validasi dokumen, dan Keperluan lainnya yang menghubungkan 
            Ormawa-ormawa di SV IPB University terhubung langsung oleh 
            pembina serta pimpinan Kampus.
          </p>

          <div class="buttons">
            <a href="{{ route ('login')}}" class="btn dark">Login</a>
            <a href="{{ route ('register')}}" class="btn light">Register</a>
          </div>
        </div>

        <div class="right">
          <img src="images/master1.png"  width=98% height=80%>
        </div>
      </header>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
