@extends('layouts.layout-home')

@section('content')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a>
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
            <label class="stepper__button" for="stepper-3-0">Pengiriman</label>
          </div>
          <input class="stepper__input" id="stepper-3-1" name="stepper-3" type="radio"/>
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
            <div class="col-md-12">
            <form action="{{ route('checkout.update_cp', $cart->id)}}" method="post">
              {{ csrf_field() }}
              {{ method_field('patch') }}
              <div class="form-group row">
                <label for="pelanggan" class="text-black">Nama Pelanggan</label>
                <input type="text" class="form-control" id="pelanggan" name="pelanggan" disabled="" value="{{$user}}" required="">
              </div>
              <div class="form-group row">
                <label for="alamat" class="text-black">Alamat Tujuan</label>
                <textarea class="form-control" id="alamat" name="alamat_cp" required="">{{ $cart->alamat_cp }}</textarea>
              </div>
              <div class="form-group row">
                <label for="nohp" class="text-black">No Hp</label>
                <input type="text" required="" class="form-control" id="nohp" name="no_cp" value="{{ $cart->no_cp }}">
              </div>

            </div>
          </div>

          <div class="col-md-6">
          <br>
            <div class="col-md-12">
              <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">Ringkasan Pembayaran</h3>
              </div>
                  @php
                  $total=0

                  @endphp

                  @php
                  $i=1

                  @endphp
                  @foreach ($detail as $h)

                  <div class="col-md-6">
                  <span class="text-black">Pesanan {{$i++}}</span> <span>({{$h->jumlah_produk }} pcs)</span>
                  </div>

                  <div class="col-md-12 text-right">
                    <strong class="text-black">{{$h->harga}}</strong>
                  </div>
                  @php
                  $total +=$h->harga
                  @endphp

                  @endforeach

              <div class="col-md-6">
                    <span class="text-black">Total</span>
              </div>
              <div class="col-md-12 text-right">
                    <strong class="text-black">{{ $total }}</strong>
              </div>
                <button class="btn btn-outline-primary btn-sm btn-block" type='submit'>Pembayaran</button>
            </div>
            </form>
          </div>

          </div>
        </div>
      </div>
@endsection
