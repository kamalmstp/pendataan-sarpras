@include('partials.frontend.header')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('/')}}">Home</a></li>
          <li><a href="{{('daftarSekolah')}}">Daftar Sekolah</a></li>
          <li>Detail Sekolah</li>
        </ol>
        <h2>Detail Sekolah</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('img/iconsekolah.png')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Nama Sekolah</h4>
                  <span>Kepala Sekolah</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">This is some placeholder content the Contact tab's associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other .nav-powered navigation.</div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                  </div>
              </div>
  
          </div>
  
        </div>
      </section><!-- End Team Section -->

</main><!-- End #main -->
@include('partials.frontend.footer')