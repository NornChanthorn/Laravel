@extends('master')
@section("content")

<!-- Header -->
<header class="bg-info py-2 text-center  mb-4">
  <div class="container">
    <h1 class="fw-light text-white">Meet the Team</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="panha.jpg" height class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Chom Panha</h5>
          <div class="card-text text-black-50">Team Leader</div>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-4 col-md-6 mb-4" >
      <div class="card border-0 shadow">
        <img src="chanthorn.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
        <h5 class="card-title mb-0">Norn Chanthorn</h5>
          <div class="card-text text-black-50">Team Member</div>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="soklieng.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
        <h5 class="card-title mb-0">Phat Soklieng</h5>
          <div class="card-text text-black-50">Team Member</div>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
@endsection