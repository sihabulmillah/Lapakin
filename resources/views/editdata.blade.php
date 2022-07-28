@extends('template')

@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Data Barang</h4>
        <p class="card-description">
          PT Lapakin
        </p>
        <form class="forms-sample" action="/edit-data/barang-{{$edit->id}}" method="post">
          @csrf
        <div class="row">
          <div class="col-6 form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control {{$errors->first('nama') ? "is-invalid":""}}"  value="{{$edit->nama_barang}}{{old('nama')}}" name="nama" id="exampleInputName1" placeholder="Name">
            @error("nama")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
          </div>
          <div class="col-6 form-group">
            <label for="exampleSelectGender">Kategori</label>
              <select class="form-control" name="kategori" id="exampleSelectGender">
                @if ($edit->kategori == 'p')
                <option value="p" selected>Populer</option>
                @else
                <option value="d" selected>Diskon</option>
                @endif
                @if ($edit->kategori =='p')
                <option value="d">Diskon</option>    
                @else
                <option value="p">Populer</option>    
                @endif
                
              </select>
            </div>
        </div>
        <div class="row">
          <div class="col-6 form-group">
            <label for="exampleInputCity1">Harga</label>
            <input type="number" class="form-control {{$errors->first('harga') ? "is-invalid":""}}" name="harga" value="{{$edit->harga}}{{old('harga')}}" id="exampleInputCity1" placeholder="Harga">
            @error("harga")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
          </div>
          <div class="col-6 form-group">
            <label for="exampleTextarea1">Stock</label>
            <input type="number" class="form-control {{$errors->first('stock') ? "is-invalid":""}}" name="stock" value="{{$edit->stok}}{{old('stock')}}" id="exampleInputCity1" placeholder="Stock">
            @error("stock")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
          </div>
        </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection

