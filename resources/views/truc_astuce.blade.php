@extends('header')


@section('contenu') 
   
   

<div  >
  <div class="container-fluid" style="height: 500px;" >
    <div class="row align-items-center" style=" color: white; background-image: url('{{ asset('/images/trucs.jpg')}}'); height: 500px;">
        <div class="col"></div>
        <div class="col" ><h1>Trucs et astuces</h1></div>
        <div class="col"></div>
    </div>
    
  </div>
<div>


<!-- Le body-->
<div class="container" style="margin-top: 20px;">
  <div class="row">
      <div class="col-md-4">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">UAC</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">Titre</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">Lorem ipsum dolor sit 
                amet, consectetur adipiscing elit. Sed non risus. 
                </p>
                <a href="#">Lire plus</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" data-src=groupe_etudiant.jpg alt="Thumbnail [200x250]" src="{{URL::asset('/images/tunnel.jpg')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
          </div>

          <!--Astuce 1-->
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">UAC</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">Titre</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">Lorem ipsum dolor sit 
                amet, consectetur adipiscing elit. Sed non risus. 
                </p>
                <a href="#">Lire plus</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" data-src=groupe_etudiant.jpg alt="Thumbnail [200x250]" src="{{URL::asset('/images/groupe_etudiant.jpg')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
          </div>

            <div class="col-md-4">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">UAC</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">Titre</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">Lorem ipsum dolor sit 
                amet, consectetur adipiscing elit. Sed non risus. 
                </p>
                <a href="#">Lire plus</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" data-src=groupe_etudiant.jpg alt="Thumbnail [200x250]" src="{{URL::asset('/images/green.jpg')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
          </div>

          <!--Astuce 1-->
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">UAC</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">Titre</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">Lorem ipsum dolor sit 
                amet, consectetur adipiscing elit. Sed non risus. 
                </p>
                <a href="#">Lire plus</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" data-src=groupe_etudiant.jpg alt="Thumbnail [200x250]" src="{{URL::asset('/images/park.jpg')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
          </div>

            <div class="col-md-4">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">UAC</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">Titre</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">Lorem ipsum dolor sit 
                amet, consectetur adipiscing elit. Sed non risus. 
                </p>
                <a href="#">Lire plus</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" data-src=groupe_etudiant.jpg alt="Thumbnail [200x250]" src="{{URL::asset('/images/images.jfif')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
          </div>

          <!--Astuce 1-->
          <div class="col-md-4">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">UAC</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">Titre</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">Lorem ipsum dolor sit 
                amet, consectetur adipiscing elit. Sed non risus. 
                </p>
                <a href="#">Lire plus</a>
              </div>
              <img class="card-img-right flex-auto d-none d-md-block" data-src=groupe_etudiant.jpg alt="Thumbnail [200x250]" src="{{URL::asset('/images/rocks.jpg')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
          </div>
  </div>
        
</div>



@endsection

