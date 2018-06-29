@extends('layouts.startbootstrap.app')

@section('content')
<section class="bg-primary" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Tentang Kami</h2>
          <hr class="light my-4">
          <p class="text-faded mb-4">MIT Konsultan yang bergerak dalam bidang konsultan IT akan menawarkan bentuk kerjasama kepada Perusahaan Anda dalam memanfaatkan media internet terutama website untuk membantu mengembangkan potensi bisnis serta menjual produk dan jasa Anda dengan strategi online marketing yang optimal</p>
          {{-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> --}}
        </div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Layanan Kami</h2>
          <hr class="my-4">
          <p class="mb-5">Tidak hanya membuat website, Kami juga akan membantu Anda dalam pengembangan aplikasi berbasis IT lainnya!</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-desktop text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Pembuatan Website</h3>
            <p class="text-muted mb-0">Kami akan membantu mengembangkan web bisnis Anda!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-comments-o text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Konsultasi</h3>
            <p class="text-muted mb-0">Kami akan membantu memberikan konsultasi strategi pemasaran online produk dan jasa.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-cloud text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Online Marketing</h3>
            <p class="text-muted mb-0">Kami akan membantu memasarkan produk, brand dan jasa Anda secara online.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-cogs text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Maintenance</h3>
            <p class="text-muted mb-0">Kami akan membantu anda dalam pemeliharaan situs website Anda! Tak perlu repot lagi mencari karyawan IT</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-0" id="portfolio">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Klien Kami</h2>
              <hr class="my-4">
            </div>
          </div>
        </div>
    <div class="container-fluid p-0">
      <div class="row no-gutters popup-gallery">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{ asset('img/portfolio/fullsize/halt.png')}}">
            <img class="img-fluid" src="{{ asset('img/portfolio/thumbnails/halt.png')}}" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  CV. Halt Corpora
                </div>
                <div class="project-name">
                  www.halt.co.id
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/rafah.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/rafah.png" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  PT. Rafah Cuttindo
                </div>
                <div class="project-name">
                  www.rafahcuttindo.com
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/hidayah.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/hidayah.png" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  Hidayah Travel Sunnah
                </div>
                <div class="project-name">
                  www.hidayahtravelsunnah.com
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/muslimareas.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/muslimareas.png" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  Muslim Areas
                </div>
                <div class="project-name">
                  www.muslimareas.com
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/toyota.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/toyota.png" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  Sales Toyota
                </div>
                <div class="project-name">
                  www.salesexecutivetoyota.com
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/mahad.png">
            <img class="img-fluid" src="img/portfolio/thumbnails/mahad.png" alt="">
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  Al Mahad 
                </div>
                <div class="project-name">
                  www.mahaduna.sch.id
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Cara Kerja</h2>
      <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
    </div>
  </section> --}}
  <section class="bg-dark text-white">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="mb-4">Cara Kerja</h2>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
                <!-- Create an icon wrapped by the fa-stack class -->
                <span class="fa-stack fa-2x mb-3">
                <!-- The icon that will wrap the number -->
                <span class="fa fa-circle text-primary fa-stack-2x sr-icons"></span>
                <!-- a strong element with the custom content, in this case a number -->
                <strong class="fa-stack-1x">
                    1    
                </strong>
            </span>
            <h3 class="mb-3">Hubungi Kami</h3>
            <p class="text-muted mb-0">Silahkan hubungi Kami baik melalui kontak yang tersedia maupun media sosial, Kami akan berusaha sebaik mungkin merespon Anda</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
                <!-- Create an icon wrapped by the fa-stack class -->
                <span class="fa-stack fa-2x mb-3">
                <!-- The icon that will wrap the number -->
                <span class="fa fa-circle text-primary fa-stack-2x sr-icons"></span>
                <!-- a strong element with the custom content, in this case a number -->
                <strong class="fa-stack-1x">
                    2    
                </strong>
            </span>
            <h3 class="mb-3">Konsultasi</h3>
            <p class="text-muted mb-0">Diskusikan dengan Kami tentang proyek impian Anda!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
                  <!-- Create an icon wrapped by the fa-stack class -->
                  <span class="fa-stack fa-2x mb-3">
                  <!-- The icon that will wrap the number -->
                  <span class="fa fa-circle text-primary fa-stack-2x sr-icons"></span>
                  <!-- a strong element with the custom content, in this case a number -->
                  <strong class="fa-stack-1x">
                      3    
                  </strong>
              </span>
              <h3 class="mb-3">Akad</h3>
              <p class="text-muted mb-0">Kesepakatan kerja untuk menentukan harga dan target waktu berdasarkan masalah yang ada dan kemampuan Kami</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
                  <!-- Create an icon wrapped by the fa-stack class -->
                  <span class="fa-stack fa-2x mb-3">
                  <!-- The icon that will wrap the number -->
                  <span class="fa fa-circle text-primary fa-stack-2x sr-icons"></span>
                  <!-- a strong element with the custom content, in this case a number -->
                  <strong class="fa-stack-1x">
                      4    
                  </strong>
              </span>
              <h3 class="mb-3">Data</h3>
              <p class="text-muted mb-0">Penyerahan data-data yang diperlukan dalam pengembangan</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
                  <!-- Create an icon wrapped by the fa-stack class -->
                  <span class="fa-stack fa-2x mb-3">
                  <!-- The icon that will wrap the number -->
                  <span class="fa fa-circle text-primary fa-stack-2x sr-icons"></span>
                  <!-- a strong element with the custom content, in this case a number -->
                  <strong class="fa-stack-1x">
                      5    
                  </strong>
              </span>
              <h3 class="mb-3">Desain</h3>
              <p class="text-muted mb-0">Bagaimana konsep desain akan didiskusikan bersama dengan mengikuti sistem yang ada</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
                  <!-- Create an icon wrapped by the fa-stack class -->
                  <span class="fa-stack fa-2x mb-3">
                  <!-- The icon that will wrap the number -->
                  <span class="fa fa-circle text-primary fa-stack-2x sr-icons"></span>
                  <!-- a strong element with the custom content, in this case a number -->
                  <strong class="fa-stack-1x">
                      6    
                  </strong>
              </span>
              <h3 class="mb-3">Pengembangan</h3>
              <p class="text-muted mb-0">Berdasarkan diskusi sebelumnya, Kami akan mulai melakukan pengembangan proyek impian Anda!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
                  <!-- Create an icon wrapped by the fa-stack class -->
                  <span class="fa-stack fa-2x mb-3">
                  <!-- The icon that will wrap the number -->
                  <span class="fa fa-circle text-primary fa-stack-2x sr-icons"></span>
                  <!-- a strong element with the custom content, in this case a number -->
                  <strong class="fa-stack-1x">
                      7    
                  </strong>
              </span>
              <h3 class="mb-3">Publikasi</h3>
              <p class="text-muted mb-0">Saatnya mengudara, dan nikmati proyek impian Anda</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
                  <!-- Create an icon wrapped by the fa-stack class -->
                  <span class="fa-stack fa-2x mb-3">
                  <!-- The icon that will wrap the number -->
                  <span class="fa fa-circle text-primary fa-stack-2x sr-icons"></span>
                  <!-- a strong element with the custom content, in this case a number -->
                  <strong class="fa-stack-1x">
                      8    
                  </strong>
              </span>
              <h3 class="mb-3">Maintenance</h3>
              <p class="text-muted mb-0">Kami akan melakukan perbaikan bug atau error yang terjadi dalam tenggat waktu tertentu</p>
            </div>
          </div>

      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading">Kontak Kami!</h2>
          <hr class="my-4">
          <p class="mb-5">Ingin bekerjasama dengan Kami? Segera hubungi kontak yang tersedia!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
          <p>0819-5806-9022 (WA)</p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
          <p>
            <a href="mailto:info@mitkonsultan.com">info@mitkonsultan.com</a>
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection