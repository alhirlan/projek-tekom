@extends('pert3.layout.master')

@section('title', 'Beranda')
@section('menuBeranda', 'active')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
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
        <div class="container text-center mt-3 p-4 bg-white">
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


        @endsection
