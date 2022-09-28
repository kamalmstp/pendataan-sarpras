@include('partials.frontend.header')
<main id="main">
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="{{ route('/') }}">Home</a></li>
        <li><a href="{{ route('daftar-berita') }}">Berita</a></li>
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
              <img src="{{url('storage/blog/'.$data->banner_image)}}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <p>{{ $data->title }}</p>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $data->post_by }}</li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time>{{ \Carbon\Carbon::parse($data->post_date)->isoFormat('D MMMM Y') }}</time></li>
              </ul>
            </div>

            <div class="entry-content">
              {!! $data->blog !!}
            </div>

            <div class="entry-footer">
              <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-folder"></i>{{ $data->name }}</li>
                <li class="d-flex align-items-center"><i class="bi bi-tags"></i>{{ $data->post_tag }}</li>
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