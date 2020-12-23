@extends('header')


@section('contenu')

<div  >
  <div class="container-fluid" style="height: 500px;" >
    <div class="row align-items-center" style=" color: white; background-image: url('{{ asset('/images/contact_us.jpg')}}'); height: 500px;">
        <div class="col"></div>
        <div class="col" ><h1>Contacter un conseiller d'emploi</h1></div>
        <div class="col"></div>
    </div>
    
  </div>
<div>

<!--Le Texte ici-->
<div class="container">
    <div class="row">
        <div class="offset-2 col-md-8">
            <h1 style="font-weight: bold; font-size: 35px; text-align: center; margin: 50px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Sed non risus. Suspendisse lectus tortor, dignissim sit
                  amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam.
            </h1>
        </div>

    </div>

</div>

  <!--Le formulaire et l'image--> 
<div class="container" >
    <div class="row">
        <div class="col-md-6" style=" ">
            <img  class="img-fluid" src="{{URL::asset('/images/img1.png')}}">
            
        </div>

        <div class="col-md-6" style="background-color: white;">
            <form class ="needs-validation" novalidate>
                       <div class="form-floating mb-3">
                            <input type="texte" class="form-control" id="floatingInput" placeholder="Nom">
                            <label for="floatingInput">Nom</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="texte" class="form-control" id="floatingInput" placeholder="prénoms">
                            <label for="floatingInput">prénoms</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="texte" class="form-control" id="floatingInput" placeholder="Objet">
                            <label for="floatingInput">Objet</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="mail" class="form-control" id="floatingInput" placeholder="Mail du conseiller">
                            <label for="floatingInput">Mail du conseiller</label>
                        </div>

                        <div class="form-floating">
                            <textarea style="height: 100px;" class="form-control" placeholder="Saisir votre message" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Message</label>
                        </div>

                        <div><button class="btn btn-success" type="submit">Envoyer</button></div>
                    </form>
        </div>
    </div>

</div>




@endsection

