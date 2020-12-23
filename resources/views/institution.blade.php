@extends('header')


@section('contenu')

<div class="container" style="margin-top: 180px;">
    <div class="row">
        <div class="offset-3 col-md-6">
          <h1>
            Les institutions partenaires
          </h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="offset-3 col-md-6">
            
                <div  class="carousel slide" data-ride="carousel" data-interval="2000">
                    <ol class="carousel-indicators">
                        <li data-target=".carousel" data-slide-to="0" class="active"></li>
                        <li data-target=".carousel" data-slide-to="1"></li>
                        <li data-target=".carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="{{URL::asset('/images/logoifri.webp')}}" alt="IFRI">
                        <div class="carousel-caption">
                            <h1>IFRI</h1>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('/images/logouac.webp')}}" alt="UAC">
                        <div class="carousel-caption">
                            <h1>UAC</h1>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('/images/mcf-logo-300x300.jpg')}}" alt="Mastercard Foundation">
                        <div class="carousel-caption">
                            <h1>Mastercard Foundation</h1>
                        </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</div>


 
@endsection