@extends('adminlte::page')
@section('title', 'Welcome')
@section('content')
 <section id="content" class="content">
  <div class="container">
    <div class="row">
      <div class="row row-cols-1 row-cols-md-3 mt-4">
 

        <div class="col mb-4">
          <div class="card">
            <img src="gambar/sepatuwanita5.jpg" class="card-img-top" alt="..." style="height: 20rem;">
            <div class="card-body">
              <h6 class="card-title-jn">Just In</h6>
              <a href="#" class="link-item"><h6 class="card-title">Nike Air Max 97</h6></a>
              <p class="card-text">Running Shoe <br>
                                    1 Color
              </p>
              <p class="card-text-harga">Rp 2,380,000</p>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card">
            <img src="gambar/sepatuwanita6.jpg" class="card-img-top" alt="..." style="height: 20rem;">
            <div class="card-body">
              <h6 class="card-title-jn">Just In</h6>
              <a href="#" class="link-item"><h6 class="card-title">Nike Air Max Up</h6></a>
              <p class="card-text">Women's Shoe <br>
                                    3 Color
              </p>
             <p class="card-text-harga">Rp 1,199,000</p>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card">
            <img src="gambar/sepatuwanita7.jpg" class="card-img-top" alt="..." style="height: 20rem;">
            <div class="card-body">
              <h6 class="card-title-jn">Just In</h6>
              <a href="#" class="link-item"><h6 class="card-title">Nike ZoomX SuperRep Surge</h6></a>
              <p class="card-text">Women's Endurance Class Shoe <br>
                                    1 Color
              </p>
              <p class="card-text-harga">Rp 1,900,000</p>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card">
            <img src="gambar/sepatuwanita8.jpg" class="card-img-top" alt="..." style="height: 20rem;">
            <div class="card-body">
            <h6 class="card-title-jn">Just In</h6>
               <a href="#" class="link-item"><h6 class="card-title">Nike SuperRep Go</h6></a>
              <p class="card-text">Women's Basketball Shoe<br>
                                    1 Color
              </p>
              <p class="card-text-harga">Rp  1,429,000</p>
            </div>
          </div>
        </div>        
      </div>
    </div>
    <a class="btn btn-outline-danger btn-lg btn-block" href="{{ route('transaksi.create') }}">
                            BELI
                        </a>
  </div>
</section>


@stop 