@extends('frondent')

@section('konten')
    

    {{-- navber end --}}
    {{-- banner --}}
    <div class="banner">
      @foreach ($data as $item)
          
      <img src="skydash/image/{{$item->foto}}" width="100%" alt="">
      @endforeach
      </div>
    {{-- banner --}}
    {{-- Menu --}}
    <div class="container-fluid mt-4">
        <div class="row menu">
            <div class="col-2">
                <figure>
                    <p><i class="fa fa-medal text-warning "></i></p>
                    <figcaption>Super Seller</figcaption>
                </figure>
            </div>
            <div class="col-2">
                <figure>
                    <p><i class="fa fa-gamepad text-danger"></i></p>
                    <figcaption>Voucher Game</figcaption>
                </figure>
            </div>
            <div class="col-2">
                <figure>
                    <p><i class="fa fa-shopping-bag text-info"></i></p>
                    <figcaption>Belanja Hemat</figcaption>
                </figure>
            </div>
            <div class="col-2">
                <figure>
                  <p><i class="fa fa-tags text-success"></i></p>
                    <figcaption>Bazar s.d 90%</figcaption>
                </figure>
            </div>
            <div class="col-2">
                <figure>
                  <p><i class="fa fa-headphones text-primary"></i></p>
                    <figcaption>Aksesoris</figcaption>
                </figure>
            </div>
            <div class="col-2">
                <figure>
                  <p><i class="fa fa-th-large text-secondary"></i></p>
                    <figcaption>Semua Menu</figcaption>
                </figure>
            </div>
        </div>
    </div>
    {{-- Menu End --}}
    {{-- Kategori --}}
    <div class="container-fluid kategori mt-5">
        <div class="row">
            <div class="col-6">
                <h5><b>Kategori Pilihan</b></h5>
            </div>
            <div class="col-6 d-flex ">
                <p class="h5"><b>TopUp & Tagihan</b></p><span class="ml-3 text-danger" style="margin-top: 2px">Lihat Semua</span>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row">
                    @foreach ($kategori as $item)
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('skydash')}}/image/hijau.png" alt="Card image cap">
                            <div class="card-body p-3">
                              <p class="card-text text-center">{{$item->kategori}}</p>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="kotak rounded">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active font-weight-light" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pulsa</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font-weight-light" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Paket Data</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font-weight-light" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Listrik PLN</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form class="py-2 pl-3" action="" method="post">
                                <div class="row align-items-centercenter">
                                  <div class="form-group col-md-5 mt-2">
                                    <label for="inputNomor1" style="font-size: .95em;">Nomor Telepon</label>
                                    <input type="text" class="form-control" style="margin-top: -8px" id="inputNomor1">
                                  </div>
                                  <div class="form-group col-md-5 mt-2">
                                    <label for="inputNominal1" style="font-size: .95em;">Nominal</label>
                                    <select name="nominal" id="inputNominal1" class="form-control" style="margin-top: -8px">
                                        <option value="" hidden></option>
                                        <option value="pilihan1">pilihan 1</option>
                                        <option value="pilihan2">pilihan 2</option>
                                        <option value="pilihan3">pilihan 3</option>
                                        <option value="pilihan4">pilihan 4</option>
                                        <option value="pilihan5">pilihan 5</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-2 pl-3" style="margin-top: 32px">
                                  <button type="submit" class="btn btn-success">Beli</button>
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form class="py-2 pl-3" action="" method="post">
                                <div class="row align-items-centercenter">
                                  <div class="form-group col-md-5 mt-2">
                                    <label for="inputNomor2" style="font-size: .95em;">Nomor Telepon</label>
                                    <input type="text" class="form-control" style="margin-top: -8px" id="inputNomor2">
                                  </div>
                                  <div class="form-group col-md-5 mt-2">
                                    <label for="inputNominal2" style="font-size: .95em;">Nominal</label>
                                    <select name="nominal" id="inputNominal2" class="form-control" style="margin-top: -8px">
                                        <option value="" hidden></option>
                                        <option value="pilihan1">pilihan 1</option>
                                        <option value="pilihan2">pilihan 2</option>
                                        <option value="pilihan3">pilihan 3</option>
                                        <option value="pilihan4">pilihan 4</option>
                                        <option value="pilihan5">pilihan 5</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-2 pl-3" style="margin-top: 32px">
                                  <button type="submit" class="btn btn-success">Beli</button>
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                          <form class="py-2 pl-3" action="" method="post">
                            <div class="row align-items-centercenter">
                              <div class="form-group col-md-4 mt-2">
                                <label for="inputNominal2" style="font-size: .95em;">Jenis Produk Listrik</label>
                                <select name="nominal" id="inputNominal2" class="form-control" style="margin-top: -8px">
                                    <option value="" hidden></option>
                                    <option value="pilihan1">pilihan 1</option>
                                    <option value="pilihan2">pilihan 2</option>
                                    <option value="pilihan3">pilihan 3</option>
                                    <option value="pilihan4">pilihan 4</option>
                                    <option value="pilihan5">pilihan 5</option>
                                </select>
                              </div>
                              <div class="form-group col-md-3 mt-2">
                                <label for="inputNominal2" style="font-size: .95em;">No.Meter</label>
                                <select name="nominal" id="inputNominal2" class="form-control" style="margin-top: -8px">
                                    <option value="" hidden></option>
                                    <option value="pilihan1">pilihan 1</option>
                                    <option value="pilihan2">pilihan 2</option>
                                    <option value="pilihan3">pilihan 3</option>
                                    <option value="pilihan4">pilihan 4</option>
                                    <option value="pilihan5">pilihan 5</option>
                                </select>
                              </div>
                              <div class="form-group col-md-3 mt-2">
                                <label for="inputNominal2" style="font-size: .95em;">Nominal</label>
                                <select name="nominal" id="inputNominal2" class="form-control" style="margin-top: -8px">
                                    <option value="" hidden></option>
                                    <option value="pilihan1">pilihan 1</option>
                                    <option value="pilihan2">pilihan 2</option>
                                    <option value="pilihan3">pilihan 3</option>
                                    <option value="pilihan4">pilihan 4</option>
                                    <option value="pilihan5">pilihan 5</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2 pl-3" style="margin-top: 32px">
                              <button type="submit" class="btn btn-success">Beli</button>
                            </div>
                            </div>
                        </form>
                        </div>
                      </div>
            </div>
        </div>
        </div>
        <hr style="margin-top: 60px">
    </div>
    {{-- Kategori end --}}
    {{-- produk --}}
    <div class="container-fluid produk">
        <div class="row ">
        <div class="col-12 d-flex">
        <h5><b>Produk Palugada Terlaris</b></h5>
        <span class="text-danger ml-2" style="margin-top: 2px">Lihat Semua</span>
    </div>
</div>
    <div class="row mt-3" data-aos="fade-up">
        @foreach ($barang as $item)
        <div class="col-2">
            <div class="card">
                <img class="card-img-top" src="{{asset('skydash')}}/image/biru.png" alt="Card image cap">
                <div class="card-body text-left py-2 pt-3 px-3">
                  <a class="card-text" href="/detail_produk-{{$item->slug}}">{{$item->nama_barang}}</a>
                  <p class="mt-2" style="font-size: 1.2em;font-weight:bold">@php
                    $harga = $item->harga;
                    $rupiah = number_format($harga);
                    echo "Rp $rupiah";
                    @endphp</p>
                  <p style="font-size: .88em; margin-top: -20px"><s class="text-muted">Rp 18.000</s><span class="badge-danger ml-2 rounded px-1">-78%</span></p>
                  <p style="font-size: .8em;color:gray"><i class="fa fa-star text-warning"></i> 4.3 <span class="ml-2">Terjual 145</span></p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
    </div>
    {{-- end produk --}}
    {{-- Falsh Sale --}}
    <div class="container-fluid flash">
      <div class="row">
        <div class="col-4 mt-4" data-aos="fade-right">
          <h2><i class="fa fa-bolt text-warning"></i> Falsh Sale</h2>
          <span class="text-muted">Berakhir Dalam 03:50:25</span>
          <h4 style="font-weight:bold;margin-top: 80px">Diskon Setiap Hari Sampai 70%</h4>
          <p>Mau nikmatin <b>Falsh Sale?</b> Download dulu aplikasi Lapakin</p>
          <button class="btn btn-primary">Mau download dong</button>
        </div>
        <div class="col-8">
          <div class="row">
        <div class="col-4" data-aos="fade-down">
          <div class="card">
            <img class="card-img-top" src="{{asset('skydash')}}/image/hijau.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Produk Flash #1</p>
              <p class="h4 font-weight-bold">Rp0</p>
              <p style="margin-top: -9px"><s class="text-muted">Rp99.900</s><span class="text-danger ml-2">-52%</span></p>
              @for ($i = 1; $i < 6; $i++)
              @if ($i == 5)
              <span class="text-warning"><i class="fa fa-star-half-alt"></i></span>    
              @else
              <span class="text-warning"><i class="fa fa-star"></i></span>    
              @endif
              @endfor
              <span class="text-secondary ml-1" style="font-size: .9em">(120)</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 95%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="text-muted" style="font-size: .9em">Tersisa : 5</span>
        </div>
        <div class="col-4" data-aos="fade-up">
          <div class="card">
            <img class="card-img-top" src="{{asset('skydash')}}/image/hijau.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Produk Flash #2</p>
              <p class="h4 font-weight-bold">Rp0</p>
              <p style="margin-top: -9px"><s class="text-muted">Rp120.900</s><span class="text-danger ml-2">-79%</span></p>
              @for ($i = 1; $i < 5; $i++)
              <span class="text-warning"><i class="fa fa-star"></i></span>    
              @endfor
              <span class="text-secondary ml-1" style="font-size: .9em">(90)</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 97%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="text-muted" style="font-size: .9em">Tersisa : 3</span>
        </div>
        <div class="col-4" data-aos="fade-down">
          <div class="card">
            <img class="card-img-top" src="{{asset('skydash')}}/image/hijau.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Produk Flash #3</p>
              <p class="h4 font-weight-bold">Rp0</p>
              <p style="margin-top: -9px"><s class="text-muted">Rp18.900</s><span class="text-danger ml-2">-88%</span></p>
              @for ($i = 1; $i < 6; $i++)
              @if ($i == 5)
              <span class="text-warning"><i class="fa fa-star-half-alt"></i></span>    
              @else
              <span class="text-warning"><i class="fa fa-star"></i></span>    
              @endif
              @endfor
              <span class="text-secondary ml-1" style="font-size: .9em" >(280)</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="text-muted" style="font-size: .9em">Tersisa : 20</span>
        </div>
      </div>
    </div>
    </div>
    </div>
    {{-- Flash sale end --}}
    {{-- Produk Diskon --}}
    <div class="container-fluid produk">
      <div class="row ">
      <div class="col-12 d-flex">
      <h5><b>Aksesoris HP Terlaris</b></h5>
      <span class="text-danger ml-2" style="margin-top: 2px">Lihat Semua</span>
  </div>
</div>
  <div class="row mt-3" data-aos="fade-up">
      @foreach ($barang2 as $item)
      <div class="col-2">
          <div class="card">
              <img class="card-img-top" src="{{asset('skydash')}}/image/hijau.png" alt="Card image cap">
              <div class="card-body text-left py-2 pt-3 px-3">
                <p class="card-text" href="">{{$item->nama_barang}}</p>
                <p class="mt-2" style="font-size: 1.2em;font-weight:bold">@php
                  $harga = $item->harga;
                  $rupiah = number_format($harga);
                  echo "Rp $rupiah";
                  @endphp</p>
                <p style="font-size: .88em; margin-top: -20px"><s class="text-muted">Rp 18.000</s><span class="text-danger ml-2 rounded px-1">-78%</span></p>
                <span class="badge badge-success">Grosir</span>
                <p style="font-size: .8em;color:gray"><i class="fa fa-star text-warning"></i> 4.3 <span class="ml-2">Terjual 143</span></p>
              </div>
            </div>
      </div>
      @endforeach
  </div>
  <hr style="margin-top: 60px">
  </div>
  {{-- Akhir produk diskon --}}
  {{-- Pendarian Populer --}}
  <div class="conrainer-fluid populer">
    <div class="row">
        <div class="col-12">
        <h5><b>Pendarian Populer</b></h5>
    </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
      <div class="button-group">
        <button class="btn btn-outline-primary">Samsung A10</button>
        <button class="btn btn-outline-primary">Kalung Masker</button>
        <button class="btn btn-outline-primary">Jas Hujan</button>
        <button class="btn btn-outline-primary">Kompor Portable</button>
        <button class="btn btn-outline-primary">Masker Duckbill</button>
        <button class="btn btn-outline-primary">Laptop Asus</button>
      </div>
    </div>
    </div>
  </div>
  {{-- Akhir Penacarian --}}
  {{-- Barang --}}
  <div class="container-fluid mt-3 barang text-muted">
    <div class="row">
    <div class="col-4">
      <h5>Handphone & Aksesoris</h5>
      <p style="font-size: .9em">HP Xiaomi | HP Samsung | HP Oppo | Iphone | HP Asus | HP Vivo | HP Lenovo | Power Bank Vivan | Power Bank Wellcomm | Power Bank Robot | Power Bank Samsung | Headset Sennheiser | Earphone Jabra | Handphone & Aksesoris</p>
    </div>
    <div class="col-4">
      <h5>Elektronik</h5>
      <p style="font-size: .9em">TV Polytron | TV Sharp | TV Samsung | TV LGAC Panasonic | AC Daikin | AC Sharp | Kulkas LG | Kulkas Sharp | Kulkas Polytron | Mesin Cuci Sharp | Mesin Cuci LG | Mesin Cuci Samsung | Mesin Cuci Polytron | Elektronik lainnya</p>
    </div>
    <div class="col-4">
      <h5>Sepeda</h5>
      <p style="font-size: .9em">Sepeda Polygon | Sepeda United | Sepeda Wimcycle | Sepeda Fullbike | Sepeda Lipat | Sepeda MTB | Sepeda BMX | Sepeda Roadbike | Sepeda City bike | Sepeda Fixie | Sepeda Onthel | Sepeda terbaru</p>
    </div>
  </div>
  <div class="row">
    <div class="col-4">
      <h5>Komputer & Kamera</h5>
      <p style="font-size: .9em">Laptop Asus | Laptop Acer | Macbook | Laptop Lenovo | Laptop Dell | Laptop HP | Laptop MSI | Komputer lainnya | Printer Epson | Printer Canon | Mouse Logitech | Kamera Go | ProCanon | DSLR Nikon | Tripod Excell | Kamera lainnya</p>
    </div>
    <div class="col-4">
      <h5>Kesehatan & Kecantikan</h5>
      <p style="font-size: .9em">Makeup Maybelline | WardahSari Ayu | Parfum Bvlgari | Produk kesehatan | Produk kecantikan</p>
    </div>
    <div class="col-4">
      <h5>Hobi Koleksi & Olahraga</h5>
      <p style="font-size: .9em">Yonex | Eiger | Adidas | Nike | Sepatu Bola Specs | Sepatu Futsal Puma | Bola Mikasa | Bola Basket Spalding | Sepatu League | Gitar Yamaha | Boneka Doraemon | Action Figure Bandai | Diecast Hot Wheels | Bass Fender | Hobi koleksi lainnya | Perlengkapan olahraga</p>
    </div>
  </div>
</div>
  {{-- Akhir Barang --}}
@endsection
