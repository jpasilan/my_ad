@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-3 text-center white-panel">
        <img src="http://placehold.it/263x263">
        <div class="img-rotator"><span class="glyphicon glyphicon-circle-arrow-left"></span><button class="btn btn-primary">Agrandir cette photo</button><span class="glyphicon glyphicon-circle-arrow-right"></span></div>
        <div class="img-thumbnail">
            <img src="http://placehold.it/73x73">
        </div>
        <div class="img-thumbnail">
            <img src="http://placehold.it/73x73">
        </div>
        <div class="img-thumbnail">
            <img src="http://placehold.it/73x73">
        </div>
        <div class="img-thumbnail">
            <img src="http://placehold.it/73x73">
        </div>
        <div class="img-thumbnail">
            <img src="http://placehold.it/73x73">
        </div>
        <div class="img-thumbnail">
            <img src="http://placehold.it/73x73">
        </div>
    </div>
    <div class="col-md-6">
        <div class="ad-details white-panel">
            <span class="add-to-watchlist">ADD TO WATCHLIST<span class="glyphicon glyphicon-star watchlist"></span></span>
            <div class="row">
                <div class="col-sm-4">Date de l'affichage</div>
                <div class="col-sm-8">01-août-14</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Prix</div>
                <div class="col-sm-8"><b>65,00 $</b></div>
            </div>
            <div class="row">
                <div class="col-sm-4">Rapport d’historique de véhicule</div>
                <div class="col-sm-8"><a href="#">tenir le rapport CarProof</a></div>
            </div>
            <div class="row">
                <div class="col-sm-4">Adresse</div>
                <div class="col-sm-8">565 Côte Joyeuse, St-Raymond, QC, G3L 4B2</div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">À vendre par</div>
                <div class="col-sm-8">Propriétaire</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Année</div>
                <div class="col-sm-8">2004</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Garniture</div>
                <div class="col-sm-8">1,8T</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Marque</div>
                <div class="col-sm-8"><a href="#">Audi</a></div>
            </div>
            <div class="row">
                <div class="col-sm-4">Modèle</div>
                <div class="col-sm-8"><a href="#">A4</a></div>
            </div>
            <div class="row">
                <div class="col-sm-4">Kilomètres</div>
                <div class="col-sm-8">186454</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Type de carrosserie</div>
                <div class="col-sm-8">Berline</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Boite de vitesse</div>
                <div class="col-sm-8">Automatique</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Couleur</div>
                <div class="col-sm-8">Bleu</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Transmission</div>
                <div class="col-sm-8">4 x 4</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Type</div>
                <div class="col-sm-8">D'occasion</div>
            </div>
            <div class="row">
                <div class="col-sm-4">Type de carburant</div>
                <div class="col-sm-8">Essence</div>
            </div>
            <hr>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                <!-- For adding more tabs please refer to http://getbootstrap.com/javascript/#tabs -->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="description">
                    <b>This section will be the ad description</b>
                    <p>Basé sur un terme de 72 mois à 4,9% sur aprobation du crédit. Tx et frais en sus
                       Tout équipé, Radio AM/FM, Lecteur DC, Vitres électriques, Portes électriques, Climatiseur,
                       Régulateur de vitesse, Toit ouvrant, Vitres teintées, Intérieur en cuir, Freins ABS, Jantes en alliage,
                       Phares antibrouillards, Antidémarrage, Volant inclinable, Coussin gonflable (conducteur), 
                       Coussin gonflable (passager), Miroirs ajustables de l'intérieur, Horloge, Essuie-glaces intermittents,
                       Ouverture du volet à essence de l'intérieur, Télédéverouillage, Tachymètre, Miroirs chauffants,
                       Commandes audio au volant, Dégivreur de lunette arrière, Lecteur MP3<p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="side-ads">
            <img src="assets/css/images/ad_1.jpg" class="img-responsive"/>  
            <img src="assets/css/images/ad_2.jpg" class="img-responsive"/>  
            <img src="assets/css/images/ad_3.jpg" class="img-responsive"/>  
            <img src="assets/css/images/ad_4.jpg" class="img-responsive"/>  
        </div>
    </div>
</div>
@stop