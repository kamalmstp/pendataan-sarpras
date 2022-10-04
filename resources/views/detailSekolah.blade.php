@include('partials.frontend.header')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('/')}}">Home</a></li>
          <li><a href="{{ url()->previous() }}">Daftar Sekolah</a></li>
          <li>Detail Sekolah</li>
        </ol>
        <h2>Detail Sekolah {{ $data->nama_sekolah }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <div class="pic"><img width="150px" src="{{asset('img/iconsekolah.png')}}" class="img-fluid" alt=""></div>
                  <strong>{{ $data->nama_sekolah }}</strong>
                  <table class="table">
                    <tr>
                      <td>Kepsek</td>
                      <td>:</td>
                      <td>{{ $data->nama_kepsek }}</td>
                    </tr>
                    <tr>
                      <td>Akreditasi</td>
                      <td>:</td>
                      <td>{{ $data->akredetasi }}</td>
                    </tr>
                    <tr>
                      <td>Kurikulum</td>
                      <td>:</td>
                      <td>{{ $data->kurikulum }}</td>
                    </tr>
                  </table>
              </div>
            </div>
            
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Profil</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Data</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Kontak</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="galeri-tab" data-bs-toggle="tab" data-bs-target="#galeri" type="button" role="tab" aria-controls="galeri" aria-selected="false">Galeri</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row mt-3">
                        <div class="col-lg-6">
                          <div class="card bg-light mb-3">
                            <div class="card-header">Identitas Sekolah</div>
                            <div class="card-body">
                              <p class="card-text"><strong>NPSN : </strong>{{ $data->npsn }}</p>
                              <p class="card-text"><strong>Status : </strong>{{ $data->status }}</p>
                              <p class="card-text"><strong>Bentuk pendidikan : </strong>{{ $data->tingkat }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="card bg-light mb-3">
                            <div class="card-header">Data Rinci</div>
                            <div class="card-body">
                              <p class="card-text"><strong>Sumber Listrik : </strong>{{ $fasilitas->listrik }}</p>
                              <p class="card-text"><strong>Daya Listrik : </strong>{{ $fasilitas->daya_listrik }}</p>
                              <p class="card-text"><strong>Luas Tanah : </strong>{{ $data->luas_tanah }} m<sup>2</sup></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="row mt-3">
                        <div class="col-lg-6">
                          <div class="card bg-light mb-3">
                            <div class="card-header">Fasilitas</div>
                            <div class="card-body">
                              <p class="card-text"><strong>e-Learning : </strong>{{ $fasilitas->elearning }}</p>
                              <p class="card-text"><strong>Wi-Fi : </strong>{{ $fasilitas->wifi }}</p>
                              <p class="card-text"><strong>Seluler : </strong>{{ $fasilitas->selular }}</p>
                              <p class="card-text"><strong>Komputer : </strong>{{ $fasilitas->komputer }}</p>
                              <p class="card-text"><strong>Jumlah Komputer : </strong>{{ $fasilitas->komputer_jml }}</p>
                              <p class="card-text"><strong>Kondisi Komputer : </strong>{{ $fasilitas->komputer_kondisi }}</p>
                              <p class="card-text"><strong>Proyektor : </strong>{{ $fasilitas->proyektor }}</p>
                              <p class="card-text"><strong>Jumlah Proyektor : </strong>{{ $fasilitas->proyektor_jml }}</p>
                              <p class="card-text"><strong>Kondisi Proyektor : </strong>{{ $fasilitas->proyektor_kondisi }}</p>
                              <p class="card-text"><strong>Genset : </strong>{{ $fasilitas->genset }}</p>
                              <p class="card-text"><strong>Jumlah Genset : </strong>{{ $fasilitas->genset_jml }}</p>
                              <p class="card-text"><strong>Kondisi Genset : </strong>{{ $fasilitas->genset_kondisi }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="card bg-light mb-3">
                            <div class="card-header">Data Guru dan Siswa</div>
                            <div class="card-body">
                              <p class="card-text"><strong>Jumlah Guru : </strong>{{ $data->jumlah_guru }}</p>
                              <p class="card-text"><strong>Jumlah Guru TIK : </strong>{{ $data->jumlah_guru_tik }}</p>
                              <p class="card-text"><strong>Jumlah Siswa : </strong>{{ $data->jumlah_siswa }}</p>
                              <p class="card-text"><strong>Jumlah Rombel : </strong>{{ $data->jumlah_rombel }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          <div class="card bg-light mb-3">
                            <div class="card-header">Kontak Utama</div>
                            <div class="card-body">
                              <p class="card-text"><strong>Alamat : </strong>{{ $data->alamat }}</p>
                              <p class="card-text"><strong>Kelurahan : </strong>{{ $data->kelurahan }}</p>
                              <p class="card-text"><strong>Kecamatan : </strong>{{ $data->kecamatan }}</p>
                              <p class="card-text"><strong>Lintang : </strong>{{ $data->latitude }}</p>
                              <p class="card-text"><strong>Bujur : </strong>{{ $data->longitude }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="galeri" role="tabpanel" aria-labelledby="galeri-tab">
                      <div class="row mt-3">
                        <div class="col-lg-12">
                          <div class="card bg-light mb-3">
                            <div class="card-header">Galeri</div>
                            <div class="card-body">
                              <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                  @foreach ($galeri as $data)
                                  <div class="swiper-slide">
                                    <img class="img-fluid" src="{{url('storage/galeri/'.$data->file)}}" alt="">
                                  </div>
                                  @endforeach                  
                                </div>
                                <div class="swiper-pagination"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
  
            </div>
  
        </div>
      </section><!-- End Pricing Section -->

</main><!-- End #main -->
@include('partials.frontend.footer')