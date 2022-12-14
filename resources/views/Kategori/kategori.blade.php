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
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Kategori Barang</h4>
        <p class="card-description">
          pt lapakin <code>trijaya</code>
        </p>
        <button class="btn btn-success btn-sm mb-2" style="border-radius: 30px"><a href="{{url('/tambah-kategori')}}" style="text-decoration: none;color:white;" ><i class="ti ti-plus" style="font-size: 15px"></i> Tambah Data</a></button>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              
              <tr align="center">
                <th>
                  #
                </th>
                <th>
                  Nama Kategori
                </th>
                <th>
                </th>
              </tr>
            </thead>
            <tbody>
              @php
                  $i = 1;
              @endphp
              @foreach ($data as $item)

              <tr class="
              @if ($i % 2 == 0  )
                  {{'table-info'}}
              @else
                  {{'table-success'}}
              @endif
              " align="center">
                <td>
                  {{$i}}
                </td>
                <td>
                  {{ $item->kategori }}
                </td>
                <td>
                  <a href="/edit-kategori-{{$item->id}}"><button class="btn btn-warning  btn-rounded btn-icon" style="font-size: 15px"><i class=" ti-pencil"></i></button></a>
                  <a href="/hapus-kategori-{{$item->id}}"><button class="btn btn-danger  btn-rounded btn-icon" style="font-size: 15px"><i class=" ti-trash"></i></button></a>
                </td>
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