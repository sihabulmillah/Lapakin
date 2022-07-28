@extends('template')

@section('konten')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Slider</h4>
        <p class="card-description">
          PT Lapakin
        </p>
        <form class="forms-sample" action="/tambah-data/slider" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
          <div class="col-md-6 form-group">
            <label for="exampleInputName1">Keterangan Foto</label>
            <input type="text" name="keterangan" class="form-control {{$errors->first('keterangan') ? "is-invalid":""}}" value="{{old('keterangan')}}" id="exampleInputName1" placeholder="Keterangan">
            @error("keterangan")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-6 form-group">
            <label>File upload</label>
            <input type="file" name="image" class=" file-upload-default" >
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info  {{$errors->first('image') ? "is-invalid":""}}" value="{{old('image')}}" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
              @error("image")
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
            </div>
          </div>
          <div class="col-12">
            <center>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </center>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection