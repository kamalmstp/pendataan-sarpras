@include('partials.frontend.header')
<main id="main">
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ route('/') }}">Home</a></li>
        <li><a>Tentang</a></li>
      </ol>
    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center">

        <div class="col-lg-12 entries">

          <article class="entry entry-single">

            <div class="entry-img">
              <img src="{{asset('img/Asset 2@4x.png')}}" alt="" class="img-fluid">
            </div>

            <div class="entry-content col-lg-12">
              <p>
                Pengembangan digipen Kotabaru akan menjadi sebuah platform media informasi dan visualisasi bagi sekolah-sekolah. 
                Selain itu, sistem ini juga akan menampilkan peta jalan pendidikan serta berita-berita/informasi terkait perkembangan teknologi di
                bidang pendidikan.
              </p>
              <p>
                Platform ini diharapkan ke depannya dapat menjadi sebuah inovasi dan platform Digitalisasi Pendidikan pertama di Indonesia
              </p>
            </div>

            <div class="row">
              <div class="entry-content col-lg-6">
                <p>Situasi Sekarang</p>
                <ul>
                  <li>Guru dengan keahlian di bidang TIK masih sangat sedikit</li>
                  <li>Sinyal jaringan seluler yang lemah di lingkungan sekolah</li>
                  <li>Sedikitnya sekolah yang menyediakan WiFi di sekolah</li>
                  <li>Sedikitnya sekolah yang memiliki komputer dan laboratorium komputer</li>
                  <li>Sistem informasi untuk mendukung pengelolaan sekolah secara digital masih belum dimanfaatkan</li>
                  <li>Guru dan siswa masih dianggap belum kompeten terhadap teknologi</li>
                  <li>Belum ada platform khusus terkait media informasi dan visualisasi sekolah-sekolah di Kabupaten Kotabaru</li>
                </ul>
              </div>
              <div class="entry-content col-lg-6">
                <p>Arahan Masa Depan</p>
                <ul>
                  <li>Memberikan pelatihan pada Guru dengan skema TIK atau rekrutmen Guru TIK</li>
                  <li>Memperkuat sinyal seluler di lingkungan sekolah</li>
                  <li>Menyediakan WiFi sebagai penunjang guru dan siswa dalam pembelajaran</li>
                  <li>Pengadaan komputer dan laboratorium komputer di sekolah</li>
                  <li>Mengembangkan dan menerapkan sistem informasi untuk pengelolaan sekolah secara digital</li>
                  <li>Mengadakan pengarahan dan pelatihan terkait penggunaan teknologi</li>
                  <li>Pengembangan platform Digitalisasi Pendidikan sebagai inovasi Kabupaten Kotabaru</li>
                </ul>
              </div>
            </div>

          </article><!-- End blog entry -->

        </div><!-- End blog entries list -->

      </div>

    </div>
</section><!-- End Blog Single Section -->
</main>
@include('partials.frontend.footer')