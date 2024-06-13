<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')

    <section class="section">
        <h2 class="section-header">Portofolio</h2>
        <div class="gallery">
          <figure class="images">
            <img src="../assets/img/poto.png" class="gallery-img" />
            <figcaption>
              <h5 class="name">Project 1
              </h5>
            </figcaption>
          </figure>
          <figure class="images">
            <img src="../assets/img/poto.png" class="gallery-img" />
            <figcaption>
              <h5 class="name">Project 2
              </h5>
            </figcaption>
          </figure>
          <figure class="images">
            <img src="../assets/img/poto.png" class="gallery-img" />
            <figcaption>
              <h5 class="name">Project 3
              </h5>
            </figcaption>
          </figure>
        </div>
    </section>
 
@endsection