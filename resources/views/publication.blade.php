@extends('header')


@section('contenu')
   
<div style="background-image: url('{{ asset('/images/opp1.jpg')}}'); height: 500px;" >
  <div class="container-fluid" style="height: 500px;" >
    <div class="row align-items-center" style=" color: white; background-image: url('{{ asset('/images/opp1.jpg')}}'); height: 500px;">
        <div class="col"></div>
        <div class="col" ><h1>Publications</h1></div>
        <div class="col"></div>
    </div>
    
  </div>
<div>



<div class="container">
  <div class="row">

  <!--Début publication-->
      <div class="col-md4 " style="margin: 10px;  ">
          <div class="card border border-success rounded-5 rounded text-center">
      
              <div class="card-body" style="background-image: url('{{ asset('/images/coast.jpg')}}');">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-success">Lire la suite</a>
            </div>
          </div>
    </div>
  <!--Fin publication-->

  <div class="col-md4 " style="margin: 10px;  ">
          <div class="card border border-success rounded-5 rounded text-center">
      
              <div class="card-body" style="background-image: url('{{ asset('/images/park.jpg')}}');">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-success">Lire la suite</a>
            </div>
          </div>
    </div>
  <!--Fin publication-->

   <!--Début publication-->
      <div class="col-md4 " style="margin: 10px;  ">
          <div class="card border border-success rounded-5 rounded text-center">
      
              <div class="card-body" style="background-image: url('{{ asset('/images/coast.jpg')}}');">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-success">Lire la suite</a>
            </div>
          </div>
    </div>
  <!--Fin publication-->

  <div class="col-md4 " style="margin: 10px;  ">
          <div class="card border border-success rounded-5 rounded text-center">
      
              <div class="card-body" style="background-image: url('{{ asset('/images/park.jpg')}}');">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-success">Lire la suite</a>
            </div>
          </div>
    </div>
  <!--Fin publication-->

 <!--Début publication-->
      <div class="col-md4 " style="margin: 10px;  ">
          <div class="card border border-success rounded-5 rounded text-center">
      
              <div class="card-body" style="background-image: url('{{ asset('/images/coast.jpg')}}');">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-success">Lire la suite</a>
            </div>
          </div>
    </div>
  <!--Fin publication-->

  <div class="col-md4 " style="margin: 10px;  ">
          <div class="card border border-success rounded-5 rounded text-center">
      
              <div class="card-body" style="background-image: url('{{ asset('/images/park.jpg')}}');">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-success">Lire la suite</a>
            </div>
          </div>
    </div>
  <!--Fin publication-->

  
  </div>
</div>



@endsection