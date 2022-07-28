<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapakin - Online Shop</title>
    {{-- my style --}}
    <link rel="stylesheet" href="skydash/css/style.css">
    {{-- style bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- icon --}}
    <link rel="shortcut icon" href="skydash/image/lapak-mini.png" />
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body style="font-family: Ubuntu">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
        <a class="navbar-brand brand-logo mr-4" style="margin-top: -8px" href="#"><img src="skydash/image/lapak.png" width="150px" height="30px" alt="logo"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-4" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produk Virtual
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Investasi</a>
                <a class="dropdown-item" href="#">Pinjaman</a>
                <a class="dropdown-item" href="#">Travel</a>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kategori Barang
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Elektronik</a>
                  <a class="dropdown-item" href="#">Sepeda</a>
                  <a class="dropdown-item" href="#">Olahraga</a>
                  <a class="dropdown-item" href="#">Handphone</a>
                  <a class="dropdown-item" href="#">Komputer</a>
                </div>
              </li>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 ml-md-2" size="55" type="search" placeholder="Aku mau belanja ..." aria-label="Search">
          </form>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
        </div>
    </div>
      </nav> 
 
    @yield('konten')
 
 
 
 
 {{-- footer --}}
 <div class="container-fluid" style="padding: 0 30px;">
    <div class="row">
      <div class="col-6">
        <img src="{{asset('skydash')}}/image/lapak.png" alt="logo" width="22%">
        <span class="ml-3 mt-2" style="font-size: .9em">
        situs jual beli online mudah & terpercaya</span>
      </div>
      <div class="col-6">
        <p align='right'>Temukan kami di : <img src="{{asset('skydash')}}/image/medos.png" alt=""></p>
      </div>
    </div>
    <hr class="mt-1">
    <div class="row mt-1">
    <div class="col-3">
      <button class="btn btn-primary mt-2">Bantuan (Hubungi Kami)</button>
    <button class="btn btn-primary mt-2">FAQ (Tanya Jawab)</button>
    <button class="btn btn-primary mt-2">Panduan Keamanan</button>
  </div>
    <div class="col-6 pl-2">
    <div class="row text-muted">
      <div class="col-4">
        <ul class="submenu">
          <h5>Lapkin</h5>
          <li>Tentang Lapakin</li>
          <li>Aturan Penggunaan</li>
          <li>Kebijakan Privasi</li>
          <li>Blog Lapakin</li>
          <li>Karir di lapakin</li>
        </ul>
      </div>
      <div class="col-4 pl-4">
        <ul class="submenu">
          <h5>Pelapak</h5>
          <li>Cara Berjualan</li>
          <li>Keuntungan Jualan</li>
          <li>Index Merk</li>
        </ul>
      </div>
      <div class="col-4 pl-4">
        <ul class="submenu">
          <h5>Pembeli</h5>
          <li>Cara Belanja</li>
          <li>Pembayaran</li>
          <li>Jaminan Aman</li>
          <li>Jasa Pengadaan</li>
          <li>Halaman Tag</li>
        </ul>
      </div>
    </div>
    </div>
    <div class="col-3 text-right">
    <img src="{{asset('skydash')}}/image/google.png" alt="">
    </div>
  </div>
  <hr class="mt-4">
  <p class="text-secondary" style="font-size: .9em">&copy; 2022 Hak Cipta Terpelihara <span class="text-danger">PT Lapakin.com</span></p>
  </div>
  {{-- footer --}}









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
{{-- aos --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration:600,
  });
</script>
</body>
</html>