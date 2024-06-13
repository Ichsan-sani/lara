<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')
    
      <div id="content-img">
        <div class="content1">
          <img src="assets/img/ican2.png">
          <h2 class="content-header">Ichsan nursani</h2>
          <p class="content-text">
            <b>siswa</b>
          </p>
        </div>
      </div>
      <!-- Short Description -->
      <section class="section section-small">
        <h2 class="section-header">About</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, libero veritatis expedita aliquam facere inventore cumque, fugit soluta, cum totam accusantium velit temporibus aut maxime minima rerum! Officia, distinctio dolores.</p>
      </section>
      <!-- Education List -->
      <section class="section section-small">
        <h2 class="section-header">Education</h2>
        <h5>SD AAA</h5>
        <p>2012-2020</p>
        <h5>SMP AAA</h5>
        <p>2021-2023</p>
      </section>
 
@endsection