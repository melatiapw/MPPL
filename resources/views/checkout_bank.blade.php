@extends('layouts.layout-home')

@section('content')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="{{ url('/')}}">Home</a>
            <span class="mx-2 mb-0">/</span> <a href="{{ url('/cart')}}">Cart</a>
            <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>

    <ul class="stepper-container">
      <li class="stepper-container__item">
        <div class="stepper">
          <input class="stepper__input" id="stepper-3-0" name="stepper-3" type="radio" checked="checked"/>
          <div class="stepper__step">
            <a class="stepper__button" href="{{ url('/checkout-alamat')}}">Pengiriman</a>
          </div>
          <input class="stepper__input" id="stepper-3-1" name="stepper-3" type="radio" checked="checked"/>
          <div class="stepper__step">
            <label class="stepper__button" for="stepper-3-1">Pembayaran</label>
          </div>
        </div>
      </li>
    </ul>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <!-- Form Metode Pembayaran -->
            <form action="#" method="post">
            <div class="form-group row">
              <div class="col-md-12">
                <div class="col-md-6">
                    <span class="text-black">Metode Pembayaran</span>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Transfer</h4>
                        <div class="card-content">
                          <div class="form-group">
                            <label>
                              <input type="radio" name="r1" class="minimal" checked>
                              Pengecekan Manual (08.00 - 23.00)
                            </label>
                          </div>

                        </div>
                    </div>
                </div>
              </div>
            </div>
            </form>
            <!-- Form Pilihan Bank Transfer -->
            <form action="#" method="post">
            <div class="form-group row">
              <div class="col-md-12">
                  <span class="text-black">Rekening Tujuan</span>
                  <div class="card">
                    <div class="card-body">
                        <div class="card-content">
                          <h4>BNI</h4>
                          <ul class="list-unstyled">
                            <li>
                              <input type="radio" name="r1" class="minimal" checked>
                              <a>Nama : Achmad Fanani</a><br>
                              <a>Nomor : 08xxxx</a>
                            </li>
                          </ul>
                          <h4>BCA</h4>
                          <ul class="list-unstyled">
                            <li>
                              <input type="radio" name="r1" class="minimal" checked>
                              <a>Nama : Achmad Fanani</a><br>
                              <a>Nomor : 08xxxx</a>
                            </li>
                          </ul>
                          <h4>Mandiri</h4>
                          <ul class="list-unstyled">
                            <li>
                              <input type="radio" name="r1" class="minimal" checked>
                              <a>Nama : Achmad Fanani</a><br>
                              <a>Nomor : 08xxxx</a>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            </form>
          </div>          
          <div class="col-md-6">
            <br>
            <div class="card">
                <div class="card-body">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Ringkasan Pembayaran</h3>
                  </div>
                    <div class="card-content">
                      <div class="col-md-6">
                          <span class="text-black">Pesanan 1</span> <span>(100 pcs)</span>
                      </div>
                      <div class="col-md-12 text-right">
                          <strong class="col-md-12 text-black border-bottom mb-5">$230.00</strong>
                      </div>
                      <div class="col-md-6">
                            <span class="text-black">Total</span>
                      </div>
                      <div class="col-md-12 text-right">
                            <strong class="col-md-12 text-black border-bottom mb-5">$230.00</strong>
                      </div><br>
                        <button class="btn btn-outline-secondary btn-sm btn-block">Bayar Uang Muka</button>
                        <p class="text-black text-center">ATAU</p>
                        <button class="btn btn-primary btn-sm btn-block">Bayar Penuh</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
