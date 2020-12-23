@extends('header')


@section('contenu')
   

<div style="background-image: url('{{ asset('/images/opp1.jpg')}}'); height: 500px;" >
  <div class="container-fluid" style="height: 500px;" >
    <div class="row align-items-center" style=" color: white; background-image: url('{{ asset('/images/etudiants africains.jpg')}}'); height: 500px;">
        <div class="col"></div>
        <div class="col" ><!--<h1>Actualités</h1>--></div>
        <div class="col"></div>
    </div>
    
  </div>
<div>







<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Actualités
          
        </h1>

        

        <!-- Actualité Post -->
        <div class="card mb-2">
          <img class="card-img-top" src="{{URL::asset('/images/african-student-working-with-laptop_19485-45891.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Titre de l'actualité</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="{{URL::asset('/accueil/article1')}}" class="btn btn-success">Lire la suite &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <p>Mastercard Foundation at UAC</p>
          </div>
        </div>

        <!-- Actualité Post -->


        <!-- Actualité Post -->
        <div class="card mb-2">
          <img class="card-img-top" src="{{URL::asset('/images/african-student-working-with-laptop_19485-45891.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Titre de l'actualité</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="{{URL::asset('/accueil/article1')}}" class="btn btn-success">Lire la suite &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <p>Mastercard Foundation at UAC</p>
          </div>
        </div>

        <!-- Actualité Post -->

        <!-- Actualité Post -->
        <div class="card mb-2">
          <img class="card-img-top" src="{{URL::asset('/images/african-student-working-with-laptop_19485-45891.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Titre de l'actualité</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="{{URL::asset('/accueil/article1')}}" class="btn btn-success">Lire la suite &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2020 by
            <p>Mastercard Foundation at UAC</p>
          </div>
        </div>

        <!-- Actualité Post -->
        
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Anciens</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Nouveaux &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Chercher</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Trouver</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Informatique</a>
                  </li>
                  <li>
                    <a href="#">Energie renouvelable</a>
                  </li>
                  <li>
                    <a href="#">Agronomie</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Maintenance biomédicale</a>
                  </li>
                  <li>
                    <a href="#">Transformation alimentaire</a>
                  </li>
                  <li>
                    <a href="#">Nutrition</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection

