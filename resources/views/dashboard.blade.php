@extends('template')

@section('konten')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome, Administator</h3>
          <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="skydash/images/dashboard/people.svg" alt="people">
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
              </div>
              <div class="ml-2">
                <h4 class="location font-weight-normal">Pancoran Mas</h4>
                <h6 class="font-weight-normal">Depok - Indonesia</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-12 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Total Data Slider</p>
              <p class="fs-30 mb-2">{{$jumlah_slider}}</p>
              <p>pt lapakin</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Total Barang</p>
              <p class="fs-30 mb-2">{{$jumlah_barang}}</p>
              <p>pt lapakin</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Total Kategori Barang</p>
              <p class="fs-30 mb-2">{{$jumlah_kategori}}</p>
              <p>pt lapakin</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
  @if (session('status'))
    

<div class="alert bg-success alert-dismissible fade show rounded" role="alert">
   <strong class="text-white"> {{session('status')}} </strong>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 @endif
</div>
  <div class="col-lg-12 grid-margin stretch-card">
    
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Barang</h4>
        <p class="card-description mb-4">
          pt lapakin <code>trijaya</code>
        </p>
        <button class="btn btn-success btn-sm mb-2" style="border-radius: 30px"><a href="/tambah-data" style="text-decoration: none;color:white;" ><i class="ti ti-plus" style="font-size: 15px"></i> Tambah Data</a></button>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Nama Barang
                </th>
                <th>
                 Kategori
                </th>
                <th>
                Harga
                </th>
                <th>
                
                </th>
              </tr>
            </thead>
            <tbody>
              @php
                  $i = 1;
              @endphp 
              @foreach ($data_barang as $item)
              <tr>
                <td>
                  {{ $i }}
                </td>
                <td>
                  {{ $item->nama_barang }}
                </td>
                <td>
                  @if ($item->kategori == 'p')
                  <label class="badge badge-info text-white">Populer</label>    
                  
                  
                      @else
                      <label class="badge badge-warning">Diskon</label>
                    
                  @endif
                </td>
                <td>
                  @php
                        $harga = $item->harga;
                        $rupiah = number_format($harga);
                        echo "Rp $rupiah";
                        @endphp
                </td>
                <td>
                    <a href="/edit-data-{{$item->id}}"><button class="btn btn-warning  btn-rounded btn-icon" style="font-size: 15px"><i class=" ti-pencil"></i></button></a>
                    <a href="/hapus-data-{{$item->id}}"><button class="btn btn-danger  btn-rounded btn-icon" style="font-size: 15px"><i class=" ti-trash"></i></button></a>
                </td>
              </tr>
             @php
                  $i++;
              @endphp 
              @endforeach 
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
