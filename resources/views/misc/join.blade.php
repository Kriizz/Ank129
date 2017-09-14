@extends('master')

@section('title', 'Rejoindre '.config('app.name'))

@section('stylesheet')
<link type="text/css" rel="stylesheet" href="{{ asset('css/download.css') }}" />
@endsection

@section('header', 'ak-background-type-internal')

@section('content')
<div class="container ak-main-container ">
    <div>
    	<div class="row">
  			<div class="col-sm-12">
    			<nav>
      				<div class="ak-breadcrumb-spacer"></div>
            		<div class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
				        <a rel="index" class="ak-first" href="{{ route('homepage') }}" itemprop="url">
				          	<span itemprop="title">Accueil</span>
				        </a>
            		</div>
          		</nav>
  			</div>
  		</div>
	</div>    
	<div class="ak-main-page ak-page-download">
  		<div class="row">
    		<div class="main col-md-12">
      			<div class="ak-page-header">
        			<div class="ak-title-container">
          				<h1>
            				<span class="ak-icon-big ak-download"></span>
            				Télécharger {{ config('app.name') }}          
            			</h1>
        			</div>
      			</div>
      			<div class="ak-content-download">
        			<div class="ak-banner">
          				<div class="ak-content-block">
                          	<div class="col-sm-6"></div>
              				<div class="col-sm-5 ak-inner-block">
                      			<a class="btn btn-info ak-btn-big ak-ga-event-tracking" href="{{ config('app.download.win') }}">
      								télécharger le jeu      
      								<span>Version :  Windows</span>
    							</a>
    							<script type="application/json">{"aGaEventTracking":["send","event",{"eventCategory":"button","eventAction":"click","eventLabel":"download button"}]}</script>    
    							<div class="clearfix"></div>
    							<div class="ak-other-version">
      								<div class="ak-title">
        								<a href="javascript:void(0);" onclick="require('jquery')(this).parent().next().show();">
          									<strong>Télécharger une autre version</strong>
        								</a>
      								</div>
      								<div class="ak-list-link" style="display:none;">
      									<a href="{{ config('app.download.mac') }}" class="ak-ga-event-tracking">Mac OS</a>
      									<script type="application/json">{"aGaEventTracking":["send","event",{"eventCategory":"button","eventAction":"click","eventLabel":"download button"}]}</script>
									</div>
    							</div>
          						<a class="ak-problems" href="#" target="_blank">Un problème d'installation ?</a>
          						@if (Auth::guest())
                				<div class="ak-create-account-block">
                  					Pour jouer à {{ config('app.name') }}, vous devez posséder un compte. <a href="{{ route('user.register') }}">Créer un compte</a>
               	 				</div>
               	 				@endif
            				</div>
            				<div class="col-md-1"></div>
          				</div>
        			</div>
      			</div>
    		</div>
      	</div>
  		<div class="ak-first-links-container row">
  			<div class="ak-first-links">
    			<div class="ak-content-block">
      				<div class="ak-content-block-content">
        				<div class="row">
          					<div class="ak-header-block col-md-5">
            					<div class="ak-title-block"><span>3</span> EN ROUTE !</div>
            					<div class="ak-illu"></div>
            					<div class="ak-title-text">
            						<p>Votre quête peut maintenant<br />
								  	commencer. Faites preuve de<br />
								  	bravoure, d'intelligence<br />
								  	et d'héroïsme.</p><p>Préparez-vous à vivre une<br />
								  	aventure hors du commun :<br />
								  	les Dofus n'attendent que vous !</p>
								</div>
          					</div>
         	 				<div class="ak-links-block col-md-7">
            					<div class="ak-link-block col-sm-4">
              						<div class="ak-link-title">
                						<div>Premiers pas dans<br />le monde des douze ?</div>
              						</div>
              						<div class="ak-illu-link ak-illu-link1"></div>
					              	<div class="ak-link-text">Sachez qu'ici tout est possible à l'intrépide, il vous suffit de suivre le guide !</div>
					              	<div class="ak-bottom-link">
					                	<a class="btn btn-info btn-lg" href="/fr/mmorpg/tutoriels">voir les tutoriels</a>
					              	</div>
            					</div>
				            	<div class="ak-link-block col-sm-4">
				              		<div class="ak-link-title">
				                		<div>Vous n'êtes<br />pas seul !</div>
				              		</div>
				              		<div class="ak-illu-link ak-illu-link2"></div>
				              		<div class="ak-link-text">Communiquez librement avec toute la population du Monde des Douze.</div>
				              		<div class="ak-bottom-link">
				                		<a class="btn btn-info btn-lg" href="http://forum.dofus.com" target="_blank">découvrir la communauté</a>
				              		</div>
				            	</div>
				            	<div class="ak-link-block col-sm-4">
				              		<div class="ak-link-title">
				                		<div>des questions ?</div>
				              		</div>
				              		<div class="ak-illu-link ak-illu-link3"></div>
				              		<div class="ak-link-text">Le support est là pour vous répondre !</div>
				              		<div class="ak-bottom-link">
				                       	<a class="btn btn-info btn-lg" href="https://support.ankama.com/hc/fr#dofus" target="_blank">contacter le support</a>
				              		</div>
				            	</div>
          					</div>
        				</div>
      				</div>
    			</div>
  			</div>
		</div>
	</div>  
</div>
@endsection