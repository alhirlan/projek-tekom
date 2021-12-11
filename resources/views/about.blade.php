<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <div class="container text-center">
        <h2>Penjelasan Singkat</h2>
        <div class="row">
            <div class="justify-content-left mt-3">
                <p> Website ini untuk memenuhi tugas akhir dari 2 mata kuliah yaitu Rekayasa Perangkat Lunak (RPL) dan
                    Pemrograman Berbasis Web. Beranggotakan 6 orang Awaluddin Luthfi Hirlan Bahari
                    (Manajer,Programmer,Tester), Aditya Muhammad Fallen (Programmer, Tester), Delwiena Agnel Viera Br
                    Ginting (Analis Data, Tester), Raja Alamsyah Tahir (Analisis Sistem, Programmer) Saddam Husein (Analisis
                    Data, Tester), dan Shafira Novita (Analisis Sistem, Dokumenter) </p>
            </div>
        </div>

        <!-- About Section -->
        <div class="container text-center mt-3 p-4">
            <h3 class="padding-24 text-light-grey">My Reputation</h3>
            <div class="row d-block mt-3">
                <div class="justify-content-left text-grey padding-64" id="about">


                    <!-- Testimonials -->

                    <img src="/w3images/bandmember.jpg" alt="Avatar" class="left circle margin-right" style="width:80px">
                    <p><span class="large margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
                    <p>John Doe saved us from a web disaster.</p><br>

                    <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="left circle margin-right" style="width:80px">
                    <p><span class="large margin-right">Rebecca Flex.</span> CEO at Company.</p>
                    <p>No one is better than John Doe.</p>

                    <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="left circle margin-right" style="width:80px">
                    <p><span class="large margin-right">Rebecca Flex.</span> CEO at Company.</p>
                    <p>No one is better than John Doe.</p>

                    <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="left circle margin-right" style="width:80px">
                    <p><span class="large margin-right">Rebecca Flex.</span> CEO at Company.</p>
                    <p>No one is better than John Doe.</p>

                    <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="left circle margin-right" style="width:80px">
                    <p><span class="large margin-right">Rebecca Flex.</span> CEO at Company.</p>
                    <p>No one is better than John Doe.</p>

                    <!-- End About Section -->
                </div>
            </div>
        </div>
    </div>

</div>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>