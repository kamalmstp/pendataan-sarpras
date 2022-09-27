@include('partials.frontend.header')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('/')}}">Home</a></li>
          <li>Daftar Sekolah</li>
        </ol>
        <h2>Daftar Sekolah</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <div class="content">
      <div class="block block-rounded">
          <div class="block-header block-header-default">
          </div>
          <div class="block-content block-content-full" style="overflow-x:auto;">
          <table id="sekolah" class="table table-bordered table-striped table-vcenter js-dataTable-full">
              <thead>
              <tr align="center">
                  <th class="text-center" style="width: 80px;">#</th>
                  <th>NPSN</th>
                  <th>Nama Sekolah</th>
                  <th>Kecamatan</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($dtsekolah as $item)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $item->npsn }}</td>
                <td>{{ $item->nama_sekolah }}</td>
                <td>{{ $item->kecamatan }}</td>
              </tr>
              @endforeach
              </tbody>
          </table>
          </div>
      </div>
  </div>

</main><!-- End #main -->
@include('partials.frontend.footer')