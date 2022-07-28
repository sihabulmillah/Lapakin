@extends('template')

@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Barang</h4>
        <p class="card-description">
          PT Lapakin
        </p>
        <form class="forms-sample" action="/tambah-data/barang" method="post">
          @csrf
        <div class="row">
          <div class="col-6 form-group">
            <label for="exampleInputName1">Nama</label>
            <input type="text" class="form-control {{$errors->first('nama') ? "is-invalid":""}}" value="{{old('nama')}}" name="nama"   id="exampleInputName1" placeholder="Name">
            @error("nama")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
          </div>
          <div class="col-6 form-group">
            <label for="exampleSelectGender">Kategori</label>
              <select class="form-control {{$errors->first('kategori') ? "is-invalid":""}}" value="{{old('kategori')}}" name="kategori" id="exampleSelectGender">
                <option value="p">Populer</option>
                <option value="d">Diskon</option>
              </select>
              @error("kategori")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
            </div>
        </div>
        <div class="row">
          <div class="col-6 form-group">
            <label for="exampleInputCity1">Harga</label>
            <input type="number" class="form-control {{$errors->first('harga') ? "is-invalid":""}}" value="{{old('harga')}}" name="harga" id="exampleInputCity1" placeholder="Harga">
            @error("harga")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6 form-group">
            <label for="exampleTextarea1">Stock</label>
            <input type="number" class="form-control {{$errors->first('stock') ? "is-invalid":""}}" value="{{old('stock')}}" name="stock" id="exampleInputCity1" placeholder="Stock">
            @error("stock")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <center>
          <button type="submit" class= "btn btn-primary">Submit</button>
        </center>
        </form>
      </div>
    </div>
  </div>
@endsection