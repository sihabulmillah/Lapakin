@extends('frondent')

@section('konten')
    <br><br><br>
    <div class="container-full mt-5">
        <div class="row">
            <div class="col-12">
                <p class="text-secondary" style="font-size: .82em">Home >Sepeda >Fullbike >MTB ><span class="text-danger">MTB 27.5 POLYGON PREMER 4 - SEPEDA POLYGON PREMER ...</span></p>
            </div>
        </div>
        <hr class="mt-1">
        <div class="row mt-5">
          {{-- Kiri --}}
            <div class="col-4">
                <img src="{{asset('skydash')}}/image/biru.png" width="90%"alt="">
                <div class="row" style="margin-top: 10px">
                  <div class="col-3">
                    <img src="skydash/image/hijau.png" alt="" class="img-fluid ">
                  </div>
                  <div class="col-3" style="margin-left: -12.8px" >
                    <img src="skydash/image/hijau.png" alt="" class="img-fluid ">
                  </div>
                  <div class="col-3" style="margin-left: -12.8px" >
                    <img src="skydash/image/hijau.png" alt="" class="img-fluid ">
                  </div>
                  <div class="col-3" style="margin-left: -12.8px" >
                    <img src="skydash/image/hijau.png" alt="" class="img-fluid ">
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-5 text-center">
                    <p><i class="far fa-heart"></i> Favorit</p>
                  </div>
                  <div class="col-2">|</div>
                  <div class="col-5">
                    <p><i class="fa fa-share-alt"></i> Bagikan</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 txt">
                  <p style="font-size: 1.07em;font-weight: bold">Diskon Menanti Kamu di App !</p>
                <div class="row " style="margin-top: -10px">
                  <div class="col-6 ">
                    <p style="font-size: small">
                      Scan kodenya untuk bayar di app. Ada banyak voucher untuk kamnu pakai.
                    </p>
                  </div>
                  <div class="col-6">
                    <button class="btn btn-outline-secondary text-dark"><i class="fas fa-qrcode"></i> QR-Code</button>
                  </div>
                </div>
              </div>
              </div>
            </div>
            {{-- Kanan --}}
            <div class="col-8">
                @foreach ($data as $item)
                <h3 style="font-weight: bold">
                    {{$item->nama_barang}}</h3>
                    @for ($i = 1; $i < 6; $i++)
              @if ($i == 5)
              <span class="text-warning" style="font-size: .8em"><i class="fa fa-star-half-alt"></i></span>    
              @else
              <span class="text-warning" style="font-size: .8em"><i class="fa fa-star"></i></span>    
              @endif
              @endfor
              <span class="ml-2 text-dark" style="font-size: .9em">117 Ulasan <i class="fa fa-circle ml-2"></i>
              128 Terjual</span>
                <p class="mt-5 text-secondary"><s>Rp 600.000</s></p>
                <p style="font-weight: bold;margin-top: -20px" class="text-danger h3">@php
                    $harga = $item->harga;
                    $rupiah = number_format($harga,'2',',','.');
                    echo "Rp$rupiah";
                    @endphp<span style="font-size: .9rem;font-weight:400" class="ml-2">Hemat 20%</span></p>
                @endforeach
                <hr class="mt-3">
                <table width="35%">
                    <tr>
                        <td valign="bottom"  >
                            <label for="size" width="100px"><b>Size Frame</b></label>
                        </td>
                        <td style="margin-right: 10px">
                            <select name="" id="size" class="custom-select">
                                <option hidden>Pilih Jenis ...</option>
                                <option value="">s 15</option>
                                <option value="">m 17</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <p class="text-danger mt-1" style="font-size: .9em">Stok Terbatas Sisa 3 Lagi</p>
                <div class="row mt-2">
                  <div class="col-12">
                  <hr>
                  <div class="row">
                    <div class="col-3">
                      <p><b>Pengiriman</b></p>
                    </div>
                    <div class="col-3">
                      <p class="text-muted" style="font-size: small">Lokasi Pelapak</p>
                      <h6 style="margin-top: -10px">Kab.Bogor</h6>
                    </div>
                    <div class="col-3">
                      <p class="text-muted" style="font-size: small">Tujuan Pengiriman</p>
                      <h6 style="margin-top: -10px" class="lok">Pilih lokasi anda</h6>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-9 offset-3">
                    <table width="100%">
                      <tr>
                        <td>
                          <select name="" class="custom-select" id="kirim">
                            <option value="" selected>J&T Regular</option>
                            <option value="">JNE Regular</option>
                            <option value="">JNE Trucking</option>
                            <option value="">
                              AMBIL Sendiri
                            </option>
                          </select>
                        </td>
                        <td valign='bottom' width="220px" class="pl-2">
                          <label for="kirim" style="font-size: small">
                            Tersedia 4 Kurir
                          </label>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                  <hr>
                  <button class="btn btn-outline-primary"><i class="fa fa-comment-dots"></i> Chat</button>
                  <button class="btn btn-outline-primary ml-2"><i class="fa fa-cart-plus"></i> Masukan Keranjang</button>
                  <button class="btn btn-danger ml-2">Beli Sekarang</button>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="container-full mt-5">
      <div class="row">
        <div class="col-4">
          <h4>Informasi Barang</h4>
        </div>
        <div class="col-7">
        <p style="margin-bottom: 0px;" class="tittle"><b>Kondisi Barang</b></p>
        <p class="badge badge-danger rounded">Baru</p>
        <p class="tittle"><b>Spesifikasi</b></p>
        <table class="text-secondary">
          <tr>
            <td width="130px">Kategori</td>
            <td width="10px">:</td>
            <td class="text-danger">MTB</td>
          </tr>
          <tr>
            <td>Berat</td>
            <td>:</td>
            <td>20 Kilogram</td>
          </tr>
          <tr>
            <td>Asal Barang</td>
            <td>:</td>
            <td>Lokal</td>
          </tr>
          <tr>
            <td>Bahan</td>
            <td>:</td>
            <td>Alloy</td>
          </tr>
          <tr>
            <td>Brand</td>
            <td>:</td>
            <td class="text-danger">United</td>
          </tr>
          <tr>
            <td>Tipe</td>
            <td>:</td>
            <td>XC (Cross Country)</td>
          </tr>
          <tr>
            <td>Ukuran</td>
            <td>:</td>
            <td>5 m</td>
          </tr>
        </table>
        <p class="tittle mt-3"><b>Deskripsi</b></p>
        <p style="margin-top: -15px" class="text-secondary">
          Carglous CF Retno Helm Half Face Black Doff + Visor Bogo Flat
        </p>
        <p align="justify" class="text-secondary">
          Helm half face berbahan ABS Thermoplastic yang sangat kuat dan aman, didesain berbagaya retno dengan tambahan Visor Bogo agar dapat melindungi anda dari debu saat berkendara, dilengkapi dengan pengait sistem Quick Release Buckle,Knockdown (Busa bantalan pipi dan pembungkus kepala dapat di lepas dan di cuci ), Telah berstandar SNI (Standar Nasional Indonesia). 
        </p>
        <p align="justify" class="text-secondary">
          SPESIFIKASI : frame alloy boost Fork venom air boost Crank single speed 34t hollowtech 2 Rd shimano deore 5100 11 speed Sproket 11 speed WARBA : GREY BLACK.
        </p>
        </div>
      </div>
    </div>
    <div class="container-fluid p-0 mt-1">
      <hr class="mt-2">
      <div class="container-full pt-4">
        <div class="row">
          <div class="col-4">
            <h4>Informasi Pelapak</h4>
          </div>
          <div class="col-8">
            <p class="tittle2" style="margin-bottom: -8px"><b>Mamet Cihuy</b></p>
            <span class="text-secondary" style="font-size: .85em">Kabupaten Bogor</span>
            <p class="mt-2" style="font-size: .9em"><i class="fa fa-store text-danger"></i> Pedagang</p>
          </div>
        </div>
      </div>
      <hr class="mt-1">
      <div class="container-full py-4">
        <div class="row">
          <div class="col-4">
            <h4>Ulasan Barang</h4>
          </div>
          <div class="col-8">
            <p class="tittle2"><b>Daftar Ulasan</b></p>
            <div class="row">
              <div class="col-12">
                <button class="btn btn-outline-danger">Semua</button>
                <button class="btn btn-outline-secondary text-dark ml-2">Dengan Foto</button>
                <button class="btn btn-outline-secondary ml-2 text-dark">Dengan Deskripsi</button>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12 mt-1">
                <button class="btn btn-outline-secondary text-dark"><i class="fa fa-star text-warning"></i> 1</button>
                <button class="btn btn-outline-secondary text-dark ml-3"><i class="fa fa-star text-warning"></i> 2</button>
                <button class="btn btn-outline-secondary text-dark ml-3"><i class="fa fa-star text-warning"></i> 3</button>
                <button class="btn btn-outline-secondary text-dark ml-3"><i class="fa fa-star text-warning"></i> 4</button>
                <button class="btn btn-outline-secondary text-dark ml-3"><i class="fa fa-star text-warning"></i> 5</button>
              </div>
            </div>
              <div class="row mt-3">
                <div class="col-12">
                  @for ($i = 1; $i < 6; $i++)
                  <i class="fa fa-star text-warning"></i>
                  @endfor
                  <p class="tittle2"><b>Barang Bagus Banget !</b></p>
                  <p class="text-muted" style="font-size: small;margin-top: -20px">Ditulis 15 Jan, 2021</p>
                  <p class="text-right text-secondary"><i class="fa fa-thumbs-up"></i> 0 <i class="fa fa-thumbs-down"></i> 0</p>
                  <p class="text-secondary"><i class="fa fa-circle"></i> Ecep Suracep</p>
                </div>
              </div>
              <hr class="mt-0">
              <div class="row mt-3">
                <div class="col-12">
                  @for ($i = 1; $i < 6; $i++)
                  <i class="fa fa-star text-warning"></i>
                  @endfor
                  <p class="tittle2"><b>Mantap Surantap Slur !</b></p>
                  <p class="text-muted" style="font-size: small;margin-top: -20px">Ditulis 20 Jan, 2021</p>
                  <p class="text-right text-secondary"><i class="fa fa-thumbs-up"></i> 0 <i class="fa fa-thumbs-down"></i> 0</p>
                  <p class="text-secondary"><i class="fa fa-circle"></i> Bejo Paijo</p>
                </div>
              </div>
              <hr class="mt-0">
              <div class="row mt-3">
                <div class="col-12">
                  @for ($i = 1; $i < 6; $i++)
                  <i class="fa fa-star text-warning"></i>
                  @endfor
                  <p class="tittle2"><b>Barange Juoos Tenan !</b></p>
                  <p class="text-muted" style="font-size: small;margin-top: -20px">Ditulis 28 Jan, 2021</p>
                  <p class="text-right text-secondary"><i class="fa fa-thumbs-up"></i> 0 <i class="fa fa-thumbs-down"></i> 0</p>
                  <p class="text-secondary"><i class="fa fa-circle"></i> Suparman Abadi</p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <hr style="margin-top: -20px">
      <div class="container-full mt-5">
        <div class="row">
          <div class="col-8">
            <h4>Pilihan Lain Untukmu</h4>
          </div>
          <div class="col-4 text-right">
            <button class="btn btn-sm btn-outline-secondary text-dark"><i class="fas fa-th"></i>  Lihat Semua</button>
          </div>
        </div>
        <div class="row mt-3" data-aos="fade-up">
          @foreach ($data_populer as $item)
          <div class="col-2">
              <div class="card">
                  <img class="card-img-top" src="{{asset('skydash')}}/image/biru.png" alt="Card image cap">
                  <div class="card-body text-left py-2 pt-3 px-3">
                    <p class="card-text">{{$item->nama_barang}}</p>
                    <p class="mt-2" style="font-size: 1.2em">@php
                      $harga = $item->harga;
                      $rupiah = number_format($harga);
                      echo "Rp $rupiah";
                      @endphp</p>
                    <p style="font-size: .88em; margin-top: -20px"><s class="text-muted">Rp 18.000</s><span class="ml-2 text-danger">-78%</span></p>
                    <p style="font-size: .8em;color:gray"><i class="fa fa-star text-warning"></i> 4.3 <span class="ml-2">Terjual 145</span></p>
                  </div>
                </div>
          </div>
          @endforeach
      </div>
      <div class="row" style="margin: 60px 0">
        <div class="col-12 cari p-0">
          <span><b>Pencarian Terkait : </b></span>
          <span class="text-danger ml-3">Promo Sepeda Lipat Listrik</span>
          <span class="text-danger ml-3">
            Sepeda Lipat Listrik Battery Samsung
          </span>
          <span class="text-danger ml-3">
            T5 Sepeda Lipat Listrik
          </span>
          <span class="text-danger ml-3">
            Es T5 Sepeda Lipat Listrik
          </span>
        </div>
      </div>
      </div>
    </div>
    @endsection