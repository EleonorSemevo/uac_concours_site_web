<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('actualite', 'ActualiteCrudController');
    Route::crud('astuce_truc', 'Astuce_trucCrudController');
    Route::crud('domaine', 'DomaineCrudController');
    Route::crud('etudiant', 'EtudiantCrudController');
    Route::crud('faq', 'FaqCrudController');
    Route::crud('message', 'MessageCrudController');
    Route::crud('newsletter', 'NewsletterCrudController');
    Route::crud('opportunite', 'OpportuniteCrudController');
    Route::crud('partenaires', 'PartenairesCrudController');
    Route::crud('publication', 'PublicationCrudController');
    Route::crud('recruteur', 'RecruteurCrudController');
    Route::crud('souscris', 'SouscrisCrudController');
}); // this should be the absolute last line of this file