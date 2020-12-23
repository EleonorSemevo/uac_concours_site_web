@extends('header')


@section('contenu')
   





<div class="container-fluid" style="height: 250px;" >
    <div class="row align-items-center" style="height: 300px;">
        <div class="col"></div>
        <div class="col" ><h1 style="color:">A propos</h1></div>
        <div class="col"></div>
 </div>

<!--Un autre bloc qui commence ici, celui de l'image-->

<div class="container">
  <div class="row">
    <div class="offset-2 col-md-8" > <img  class="img-fluid border border-5 rounded-3" src="{{URL::asset('/images/recteur.jpeg')}}" alt="profile Pic" > </div>

    
  </div>
</div>

<!--Un autre bloc qui commence ici, celui du texte-->
 <div class="container">
    <div class="row">
      <div class="offset-1 col-md-5" style="margin: 20px;">
        <p style="text-align: justify;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
          Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies
            sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a,
            semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
              enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper.
              Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim.
                Pellentesque congue. Ut in risus volutpat libero pharetra tempor.
                Cras vestibulum bibendum augue. sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a,
            semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
              enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper.
              Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim.
                Pellentesque congue. Ut in risus volutpat libero pharetra tempor.
                Cras vestibulum bibendum augue
        </p>
      </div>
       <div class="offset-1 col-md-5" style="margin: 20px;">
          <p style="text-align: justify;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
            Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies
              sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a,
              semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
                enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper.
                Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim.
                  Pellentesque congue. Ut in risus volutpat libero pharetra tempor.
                  Cras vestibulum bibendum augue. sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a,
            semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
              enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper.
              Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim.
                Pellentesque congue. Ut in risus volutpat libero pharetra tempor.
                Cras vestibulum bibendum augue 
          </p>
       </div>
    </div>
 </div>



@endsection

