@extends('layouts.main')


@section('container')

<h1 class="mb-4 text-center">{{ $title }}</h1>
<div class="b-example-divider"></div>

<div class="container my-5">
  <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-5 fw-bold lh-1">Galeri Tokoh Nasional</h1>
      <p class="lead my-4" style="text-align: justify;">Mengabadikan Jejak Perjuangan: Mengenal 
        Lebih Dekat Pahlawan Nasional Indonesia. Temukan kisah inspiratif dari para pejuang bangsa yang 
        berjuang demi kemerdekaan dan keadilan. Mari bersama mengapresiasi dan mengenang warisan mereka untuk generasi mendatang.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <a href="/posts" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Blog</a>
      </div>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
        <img class="rounded-lg-3" src="img/heroes.png" alt="" width="365">
    </div>
  </div>
</div>

@endsection
