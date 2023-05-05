@extends('template')

        @section('id')
        {{ $user->id }}
        @endsection

        @section('nama')
        {{ $user->name }}
        @endsection

        @section ("color")
        {{ $user->colorcode }}
        @endsection

        @section('level')
        {{ $user->level }}
        @endsection

        @section('content')
        <div class="container-fluid rounded-4 p-2 pb-1 mb-3 text-white shadow bg-opacity: .5" style="background-color: {{ $user->colorcode }}">

            <div class="container-fluid d-flex align-items-center justify-content-evenly fw-semibold">
                
                <div class="fs-1 pt-2">{{ $user->stars }}<img src="sources/star.png" alt="star" style="width: 10%">
                </div>    
                <div class="d-flex align-self-end">
                    <button type="button" class="btn btn-sm btn-dark pt-2 pb-2">Redeem <img src="sources/star.png" alt="star" style="width: 5%"></button>
                </div>
                
            </div>
            <div class="fs-6 ml-3 container-fluid fw-light pb-3">
                Star balance
            </div>
        </div>
        
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://images.squarespace-cdn.com/content/v1/5fa1095912d2fc6dfc63ac9c/1611743434358-YAD4ZQXPNONVCN9SGJ1R/KK+menu+group+shot_.jpg" class="d-block w-100 rounded-4 shadow mb-5" alt="...">
              </div>
              <div class="carousel-item ">
                <img src="https://i0.wp.com/pointsgeek.id/wp-content/uploads/2021/08/Screen-Shot-2021-08-11-at-06.21.57.png?fit=901%2C526&ssl=1" class="d-block w-100 rounded-4 shadow mb-5" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/sources/banner.jpg" class="d-block w-100 rounded-4 shadow mb-5" alt="...">
              </div>
            </div>
        </div>

        <div class="fs-2 container-fluid border-dark border-bottom mb-3 fw-semibold">
            Promotion
        </div>

        <div class="d-flex justify-content-between  container-fluid mb-3 align-items-center border-bottom border-dark p-3">
            <div class="col-4">
                <img src="sources/promo1.jpg" alt="promo1" class="border border-dark " style="width: 100%">
            </div>

            <div class="col-7 container-fluid" style="text-align: justify">
                <div class="fs-5 fw-medium mb-1">
                    Beli 3 CUMA 45rb?!
                </div>
                <div class="fs-6">
                    Nikmati promo beli 3 Es Kopi Kenangan Mantan (R) CUMA 45RB* aja, Beb! Promo berlaku s/d 28 Agustus 2022 dengan melakukan pembelian langsung di outlet Kopi Kenangan tertentu!
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between  container-fluid mb-3 align-items-center border-bottom border-dark p-3">
            <div class="col-4">
                <img src="sources/promo2.jpg" alt="promo1" class="border border-dark " style="width: 100%">
            </div>

            <div class="col-7 container-fluid" style="text-align: justify">
                <div class="fs-5 fw-medium mb-1">
                    BERKOBAR!
                </div>
                <div class="fs-6">
                    Mau nobar babak final? Beli bundle BERKOBAR dulu, Beb. Nikmati promo bundle Bersama Kenangan Kita Nobar yang tersedia dalam 2 pilihan bundle untuk menemani waktu nobar tim jagoan kamu!

                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between  container-fluid mb-3 align-items-center">
            <div class="col-4">
                <img src="sources/promo3.jpg" alt="promo1" class="border border-dark " style="width: 100%">
            </div>

            <div class="col-7 container-fluid" style="text-align: justify">
                <div class="fs-5 fw-medium mb-1">
                    Beli 2 Hanya 18rb!
                </div>
                <div class="fs-6">
                    Promo ini berlaku cuma di Rumah Kenangan melalui Aplikasi Kopi Kenangan / datang langsung ke Rumah Kenangan mulai jam 10.00-14.00 WIB ! Beli 2 Kopi Kenangan Mantan hanya Rp18.000 (berlaku setiap hari Jumat - Senin)!
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-lg btn-level position-fixed border border-dark text-light shadow" style="bottom: 10%; right: 3%; background-color: {{ $user->colorcode }}" onclick="location.href='coffee/{{ $user->id }}'">Coffee</button>

        @endsection
