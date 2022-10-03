@include('partials.frontend.header')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat datang di Digipen Kotabaru</h2>
          <p class="animate__animated animate__fadeInUp">Platform media informasi dan visualisasi bagi sekolah-sekolah di Kotabaru</p>
        </div>
      </div>

      {{-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a> --}}

    </div>
  </section>
  <!-- End Hero -->

<main id="main">
    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
        <div class="container">
  
          <div class="row">

          @foreach($data as $row)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="icon-box">
                <h4 class="title" style="text-align: center">Daftar Sekolah</h4>
                <div class="icon"><a href="{{route('daftar-sekolah', Illuminate\Support\Facades\Crypt::encrypt($row->kecamatan))}}"><img src="{{asset('img/iconsekolah.png')}}" class="img-fluid"></a></div>
                <h4 class="title"><a href="{{route('daftar-sekolah', Illuminate\Support\Facades\Crypt::encrypt($row->kecamatan))}}">Kecamatan {{$row->kecamatan}}</a></h4>
              </div>
            </div>
          @endforeach
  
          </div>
  
        </div>
      </section><!-- End Icon Boxes Section -->
    <!-- ======= Portfoio Section ======= -->
    <section id="berita" class="portfoio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
        </div>

        
        <div class="row portfolio-container">
          @foreach($berita as $row)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="{{ route('detail-berita',$row->id) }}"><img src="{{url('storage/blog/'.$row->banner_image)}}" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <p>{{$row->title}}</p>
              <p>Dipost oleh {{$row->post_by}}</p>
              <a href="{{url('storage/blog/'.$row->banner_image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dipost oleh {{$row->post_by}}"><i class="bx bx-plus"></i></a>
              <a href="{{ route('detail-berita',$row->id) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach
        </div>
        

      </div>
    </section><!-- End Portfoio Section -->

<!-- ======= About Us Section ======= -->
<section id="tentang" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Tentang Digipen</h2>
      <p>
        Pengembangan digipen Kotabaru akan menjadi sebuah platform media informasi dan visualisasi bagi sekolah-sekolah. 
        Selain itu, sistem ini juga akan menampilkan peta jalan pendidikan serta berita-berita/informasi terkait perkembangan teknologi di
        bidang pendidikan.
      </p>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p>
          Diharapkan kedepannya platform ini dapat menjadi sebuah inovasi dalam digitaliasi pendidikan seperti :
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Mengembangkan dan menerapkan sistem informasi untuk pengelolaan sekolah secara digital</li>
          <li><i class="ri-check-double-line"></i> Mengadakan pengarahan dan pelatihan terkait penggunaan teknologi</li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.403136934577!2d116.22489031472026!3d-3.249554441834845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2def302b2ced3c85%3A0x89e9d007fad8f406!2sDinas%20Pendidikan%20dan%20Kebudayaan%20Kabupaten%20Kotabaru!5e0!3m2!1sen!2sid!4v1659279976558!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <a href="{{ route('tentang') }}" class="btn-learn-more">Selengkapnya</a>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

</main>
@include('partials.frontend.footer')