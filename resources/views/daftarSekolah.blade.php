@include('partials.frontend.header')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('/')}}">Home</a></li>
          <li>Daftar Sekolah</li>
        </ol>
        <h2>Daftar Sekolah Kecamatan {{ $data[0]->kecamatan }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">NPSN</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $row)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><a href="{{route('detail-sekolah', $row->id)}}">{{$row->nama_sekolah}}</a></td>
                    <td>{{ $row->npsn }}</td>
                    <td>{{ $row->status }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
      </div>
  </div>

</main><!-- End #main -->
@include('partials.frontend.footer')