<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
 

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
  <div class="container-fluid" style="background-color: white;">
    <a class="navbar-brand" href="{{url('/accueil/actualite')}}"><img src="{{URL::asset('/images/mcuac.png')}}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      Menu
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="{{url('/accueil/actualite')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Accueil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/accueil/actualite')}}">Actualités</a></li>
            <li><a class="dropdown-item" href="{{url('/accueil/publication')}}">Publications</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('/accueil/galerie')}}">Galerie</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/a-propos')}}">A propos</a>
        </li>
        <li class="nav-item dropdown">
          <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="{{url('/opportunites/stages')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opportunités
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/opportunites/stages')}}">Stages</a></li>
            <li><a class="dropdown-item"href="{{url('/opportunites/emplois')}}">Emplois</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="{{url('/ressource/trucs-et-astuces')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ressources éducatives
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/ressource/trucs-et-astuces')}}">Trucs et Astuces</a></li>
            <li><a class="dropdown-item" href="{{url('https://uac.bj/')}}">Podcast Employabilité</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{url('/ressource/faq')}}">Foire aux questions</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contacts
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/contact/contacter-conseiller-emploi')}}">Contacter un conseiller emploi</a></li>
            <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">Souscriver aux alertes email</a></li>
            
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a  data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Partenaires
          </a>
          <ul  class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/partenaires/entreprises')}}">Entreprises</a></li>
            <li><a class="dropdown-item" href="{{url('/partenaires/institutions')}}">Institutions</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Se connecter 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{url('/login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{url('/user/register/etudiant')}}">Etudiant</a></li>
            <li><a class="dropdown-item" href="{{url('/user/register/partenaire')}}">Partenaire</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Souscrivez aux alertes par mail</h5>
          
      </div>   
      

      <div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder=" votre adresse mail name@example.com">
            <label for="floatingInput">Adresse mail</label>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Souscrire</button>
      </div>
    </div>
  </div>
</div>

@yield('contenu')

</body>
</html>