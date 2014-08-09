@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="my-ad-panel clearfix">
            <span class="panel-header">Current Matches</span>
            <form method="POST" action="no-action.php">
                <div class="form-group">
                    <select class="form-control combobox">
                        <option value="" disabled>Categories</option>
                        <option value="cars-and-vehicls" selected>Cars & Vehicles</option>
                        <option value="buy-and-sell">Buy and Sell</option>
                        <option value="services">Services</option>
                        <option value="pets">Pets</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control combobox">
                        <option value="" disabled>Location</option>
                        <option value="Québec" selected>Québec</option>
                        <option value="Paris">Paris</option>
                        <option value="Nantes">Nantes</option>
                        <option value="Le Havre">Le Havre</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control combobox">
                        <option value="" disabled selected>Offer Type: </option>
                        <option value="offering">Offering</option>
                        <option value="wanted">Wanted</option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Price Range</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" placeholder="from">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" placeholder="to">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control combobox">
                        <option value="" disabled selected>For Sale By: </option>
                        <option value="Owner">Owner</option>
                        <option value="Dealer">Dealer</option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Year</label>
                    </div>
                    <div class="col-sm-6">                        
                        <input type="text" class="form-control" placeholder="from">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="to">
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control combobox">
                        <option value="" disabled selected>Make: </option>
                        <option value="Acura">Acura</option>
                        <option value="Alfa Romeo">Alfa Romeo</option>
                        <option value="Aston Martin">Aston Martin</option>
                        <option value="Audi">Audi</option>
                        <option value="BMW">BMW</option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Kilometers</label>
                    </div>
                    <div class="col-sm-6">                        
                        <input type="text" class="form-control" placeholder="from">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="to">
                    </div>
                </div>
                <button type="submit" class="btn btn-red pull-right"><span class="glyphicon glyphicon-search"></span> Search now</button>
            </form>
        </div>
        <div class="my-ad-panel no-heading clearfix">
            <form method="POST" action="no-action.php">
                <div class="form-group">
                    <input type="text" placeholder="Keyword" class="form-control"/>
                </div>
                <div class="form-group">
                    {{ Form::select('country',
                            ['' => 'Select Country'] + Country::getList(), '',
                            ['class' => 'form-control combobox', 'id' => 'ad-country', 'autocomplete' => 'off']) }}
                </div>
                <div class="form-group">
                    <input type="text" placeholder="City" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Zip Code" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Miles From Zip" class="form-control"/>
                </div>
                <button type="submit" class="btn btn-red pull-right"><span class="glyphicon glyphicon-search"></span> Search now</button>
            </form>
        </div>
    </div>
    <div class="col-md-6 listing-container white-panel">
        <div class="row search-excerpt">    
            <div class="col-md-3 image">
                <span class="glyphicon glyphicon-star watchlist"></span>
                <img src="http://placehold.it/70x70">
            </div>
            <div class="col-md-9 excerpt">
                <a href="#" class="title">2010 Toyota Prius hybrid  Premium gr. panneau solaire</a>
                <p class="description">Toyota Prius 2010 Premium blanc nacré condition A1 Vente initiale en juin 2010 Portes, haillon et démarrage sans clé (SmartKey); bouton pression et poignées tactiles Démarreur à distance Toit ...</p> 
                <div class="sub-details">
                    <div class="row">
                        <div class="col-xs-6"><b>80600km | Automatic</b></div>
                        <div class="col-xs-6 text-right">6 minutes ago</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6"><b>$17,400.00</b></div>
                        <div class="col-xs-6 text-right"><b>< 11 km</b></div>
                    </div>
                </div>
            </div>
        </div><!-- End search-excerpt -->
        <div class="row search-excerpt on-watchlist">    
            <div class="col-md-3 image">
                <span class="glyphicon glyphicon-star watchlist"></span>
                <img src="http://placehold.it/70x70">
            </div>
            <div class="col-md-9 excerpt">
                <a href="#" class="title">2010 Toyota Prius hybrid  Premium gr. panneau solaire</a>
                <p class="description">Toyota Prius 2010 Premium blanc nacré condition A1 Vente initiale en juin 2010 Portes, haillon et démarrage sans clé (SmartKey); bouton pression et poignées tactiles Démarreur à distance Toit ...</p> 
                <div class="sub-details">
                    <div class="row">
                        <div class="col-xs-6"><b>80600km | Automatic</b></div>
                        <div class="col-xs-6 text-right">6 minutes ago</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6"><b>$17,400.00</b></div>
                        <div class="col-xs-6 text-right"><b>< 11 km</b></div>
                    </div>
                </div>
            </div>
        </div><!-- End search-excerpt -->
        <div class="row search-excerpt">    
            <div class="col-md-3 image">
                <span class="glyphicon glyphicon-star watchlist"></span>
                <img src="http://placehold.it/70x70">
            </div>
            <div class="col-md-9 excerpt">
                <a href="#" class="title">2010 Toyota Prius hybrid  Premium gr. panneau solaire</a>
                <p class="description">Toyota Prius 2010 Premium blanc nacré condition A1 Vente initiale en juin 2010 Portes, haillon et démarrage sans clé (SmartKey); bouton pression et poignées tactiles Démarreur à distance Toit ...</p> 
                <div class="sub-details">
                    <div class="row">
                        <div class="col-xs-6"><b>80600km | Automatic</b></div>
                        <div class="col-xs-6 text-right">6 minutes ago</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6"><b>$17,400.00</b></div>
                        <div class="col-xs-6 text-right"><b>< 11 km</b></div>
                    </div>
                </div>
            </div>
        </div><!-- End search-excerpt -->
        <div class="row search-excerpt">    
            <div class="col-md-3 image">
                <span class="glyphicon glyphicon-star watchlist"></span>
                <img src="http://placehold.it/70x70">
            </div>
            <div class="col-md-9 excerpt">
                <a href="#" class="title">2010 Toyota Prius hybrid  Premium gr. panneau solaire</a>
                <p class="description">Toyota Prius 2010 Premium blanc nacré condition A1 Vente initiale en juin 2010 Portes, haillon et démarrage sans clé (SmartKey); bouton pression et poignées tactiles Démarreur à distance Toit ...</p> 
                <div class="sub-details">
                    <div class="row">
                        <div class="col-xs-6"><b>80600km | Automatic</b></div>
                        <div class="col-xs-6 text-right">6 minutes ago</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6"><b>$17,400.00</b></div>
                        <div class="col-xs-6 text-right"><b>< 11 km</b></div>
                    </div>
                </div>
            </div>
        </div><!-- End search-excerpt -->
        <div class="row search-excerpt">    
            <div class="col-md-3 image">
                <span class="glyphicon glyphicon-star watchlist"></span>
                <img src="http://placehold.it/70x70">
            </div>
            <div class="col-md-9 excerpt">
                <a href="#" class="title">2010 Toyota Prius hybrid  Premium gr. panneau solaire</a>
                <p class="description">Toyota Prius 2010 Premium blanc nacré condition A1 Vente initiale en juin 2010 Portes, haillon et démarrage sans clé (SmartKey); bouton pression et poignées tactiles Démarreur à distance Toit ...</p> 
                <div class="sub-details">
                    <div class="row">
                        <div class="col-xs-6"><b>80600km | Automatic</b></div>
                        <div class="col-xs-6 text-right">6 minutes ago</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6"><b>$17,400.00</b></div>
                        <div class="col-xs-6 text-right"><b>< 11 km</b></div>
                    </div>
                </div>
            </div>
        </div><!-- End search-excerpt -->
        <div class="row search-excerpt">    
            <div class="col-md-3 image">
                <span class="glyphicon glyphicon-star watchlist"></span>
                <img src="http://placehold.it/70x70">
            </div>
            <div class="col-md-9 excerpt">
                <a href="#" class="title">2010 Toyota Prius hybrid  Premium gr. panneau solaire</a>
                <p class="description">Toyota Prius 2010 Premium blanc nacré condition A1 Vente initiale en juin 2010 Portes, haillon et démarrage sans clé (SmartKey); bouton pression et poignées tactiles Démarreur à distance Toit ...</p> 
                <div class="sub-details">
                    <div class="row">
                        <div class="col-xs-6"><b>80600km | Automatic</b></div>
                        <div class="col-xs-6 text-right">6 minutes ago</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6"><b>$17,400.00</b></div>
                        <div class="col-xs-6 text-right"><b>< 11 km</b></div>
                    </div>
                </div>
            </div>
        </div><!-- End search-excerpt -->
        <div class="text-center">
            <ul class="pagination cen">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-3 side-ads">
        <img src="assets/css/images/ad_1.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_2.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_3.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_4.jpg" class="img-responsive"/>  
    </div>
    <div class="col-md-3 side-ads">
        <img src="assets/css/images/ad_1.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_2.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_3.jpg" class="img-responsive"/>  
        <img src="assets/css/images/ad_4.jpg" class="img-responsive"/>  
    </div>
</div>
@stop