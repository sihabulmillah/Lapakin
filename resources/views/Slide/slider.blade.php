@extends('template')

@section('konten')
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
      <h4 class="card-title">Data Slider</h4>
      <p class="card-description">
        pt lapakin <code>trijaya</code>
      </p>
      <button class="btn btn-success btn-sm mb-2" style="border-radius: 30px"><a href="/slider-tambah" style="text-decoration: none;color:white;" ><i class="ti ti-plus" style="font-size: 15px"></i> Tambah Data</a></button>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Slide</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($data as $item)
                
            
            <tr>
              <td>
                {{ $i }}
              </td>
              <td>
                {{ $item->keterangan }}
              </td>
              <td> <a href="/edit-slider-{{$item->id}}"><button class="btn btn-warning  btn-rounded btn-icon" style="font-size: 15px"><i class=" ti-pencil"></i></button></a>
              <a href="/hapus-slider-{{$item->id}}"><button class="btn btn-danger  btn-rounded btn-icon" style="font-size: 15px"><i class=" ti-trash"></i></button></a>
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