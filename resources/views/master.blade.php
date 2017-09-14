@inject('newsLib', 'App\Library\News')

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>{{ config('app.name') }}, {{ config('app.title') }}. @yield('title')</title>
	<meta name="description" content="{{ config('app.desc') }}" />
	<meta name="keywords" content="mmo, mmorpg, free mmorpg, free online mmorpg, video game, video game rental, video game system, free video game, online game, multiplayer game, free multiplayer game, dofus community, comics, pc game, pc game cheat, game, free game, online game, toy game, addicting game" />
	<meta name="Identifier-URL" content="{{ url('/') }}" />
	<meta name="language" content="fr" />
	<link type="image/x-icon" rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/common.css') }}" />
	@yield('stylesheet')
	<link type="text/css" rel="stylesheet" href="{{ asset('theme/'.config('app.theme').'/style.css') }}" />
</head>
<body class="fr @yield('header')">
	<header>
		<div class="ak-idbar">
  			<div class="ak-idbar-content">
				<div class="ak-idbar-left">
					@if (config('app.module.support'))
	  				<a class="ak-support" href="#" target="_blank">Support</a>
	  				@endif
				</div>
				<div class="ak-idbar-right">
					@if (Auth::guest())
	  				<div class="ak-nav-not-logged">
  						<div class="ak-connect-links">
							<a href="{{ route('user.login') }}" class="login">
	  							<span>Connexion</span>
	  							<img class="img-responsive" src="{{ asset('img/avatar/1.jpg') }}" alt="Avatar" />
							</a>
							<a href="{{ route('user.register') }}" class="register">Inscription</a>
  						</div>
					</div>
					@else
					<a class="ak-button-modal ak-nav-characters" data-hasqtip="3">
  						<span>{{ Auth::user()->players()->count() }}</span>
					</a>
					<script type="application/json">{"target":".ak-box-characters"}</script>
					<div class="ak-idbar-box ak-box-characters">
  						<div class="ak-box-title">
  							Mes personnages  <span data-hasqtip="0"></span>
  							<div class="ak-tooltip hidden ak-tooltip-white" style="display: none;">
								Pour être référencé dans l'annuaire des pages persos, les joueurs doivent être niveau 20 minimum.
							</div>
							<script type="application/json">{"tooltip":{"style":{"classes":"ak-tooltip-white"}}}</script>
						</div>
						<div class="ak-characters-list">

  						</div>
					</div>
					<div class="ak-button-modal ak-nav-logged" data-hasqtip="4">
    					<div class="ak-logged-account">
          					<span class="ak-nickname">{{ Auth::user()->pseudo }}</span>
                    		<span class="avatar">
      							<img src="{{ asset('img/avatar/'.Auth::user()->avatar.'.jpg') }}" alt="Avatar">
    						</span>
      					</div>
					</div>
					<script type="application/json">{"target":".ak-box-logged"}</script>
					@endif
					<div class="ak-button-modal ak-flags-links">
  						<a class="ak-flag" href="#lang"></a>
					</div>
  					<div class="ak-idbar-box ak-box-lang">
	  					<a href="{{ route('homepage') }}" hreflang="fr" class="ak-flag-fr">FR</a>
  					</div>
				</div>
  			</div>
		</div>
		<nav class="navbar navbar-default" data-role="ak_navbar">
  			<div class="navbar-container">
				<a class="ak-main-logo" href="{{ route('homepage') }}"></a>
				<div class="navbar-header">
	  				<!-- <a href="#" class="ak-nav-search"></a> -->
	  				<!--<a id="nav-toggle" href="#"><span></span></a>-->
	  				<a class="burger-btn" href="javascript:void(0)"><span></span></a>
				</div>
				<div class="navbar-collapse navbar-ex1-collapse collapse">
					@if (config('app.module.search'))
					<div class="ak-navbar-search-mob">
	  					<form action="/fr/recherche" method="get">
							<input class="ak-autocomplete" name="q" type="text" value="Rechercher..." />
							<input type="submit" value="" />
	  					</form>
					</div>
					@endif
					<ul class="nav navbar-nav">
	  					<span class="ak-navbar-left-part">
			  				<li class="lvl0 sep">
		  						<a href="{{ route('homepage') }}">Accueil</a>
							</li>
			  				<li class="lvl0 dropdown sep">
		  						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Actualités <b class="caret"></b></a>
		  						<ul class="dropdown-menu" role="menu">
					  				<li class="lvl1">
							  			<ul>
							  				<li class="lvl2"><a href="{{ route('news.all') }}">Toutes</a></li>
							  				@foreach ($newsLib->types as $id => $type)
								  			<li class="lvl2"><a href="{{ route('news.all', ['cat' => $id]) }}">{{ $type }}</a></li>
											@endforeach
								  		</ul>
									</li>
								</ul>
							</li>
							@if (config('app.module.encyclopedia'))
			  				<li class="lvl0 dropdown sep">
		  						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Encyclopédie <b class="caret"></b></a>
		  						<ul class="dropdown-menu" role="menu">
					  				<li class="lvl1">
							  			<ul>
							  				<li class="lvl2"><a href="/fr/mmorpg/encyclopedie/familiers">Familiers</a></li>
											<li class="lvl2"><a href="/fr/mmorpg/encyclopedie/armes">Armes</a></li>
											<li class="lvl2"><a href="/fr/mmorpg/encyclopedie/equipements">équipements</a></li>
											<li class="lvl2"><a href="/fr/mmorpg/encyclopedie/panoplies">Panoplies</a></li>
								  		</ul>
									</li>
								</ul>
							</li>
							@else
							<li class="lvl0 sep">
								<a href="{{ route('join') }}">Nous rejoindre</a>
							</li>
							@endif
						</span>
		  				<li class="lvl0 ak-menu-brand">
							<a class="navbar-brand" href="{{ route('homepage') }}"></a>
		  				</li>
		  				<span class="ak-navbar-right-part">
		  					@if (config('app.module.shop'))
				  			<li class="lvl0 dropdown sep">
		  						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Boutique <b class="caret"></b></a>
		  						<ul class="dropdown-menu" role="menu">
					  				<li class="lvl1">
							  			<ul>
								  			<li class="lvl2"><a href="/fr/mmorpg/actualites/news">Equipement</a></li>
											<li class="lvl2"><a href="/fr/mmorpg/actualites/devblog">Panoplie</a></li>
											<li class="lvl2"><a href="/fr/mmorpg/actualites/maj">Loterie</a></li>
								  		</ul>
									</li>
								</ul>
							</li>
							@else
							<li class="lvl0 sep">
								<a href="#">Vote</a>
							</li>
							@endif
			  				<li class="lvl0 dropdown sep">
		  						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Communauté <b class="caret"></b></a>
		  						<ul class="dropdown-menu dropdown-menu-right" role="menu">
					  				<li class="lvl1 nopointer">
								  		<a href="javascript:void(0);">Informations</a>
							  			<ul>
									  		<li class="lvl2"><a href="{{ route('rules') }}">Règlement</a></li>
											<li class="lvl2"><a href="{{ route('cgu') }}">Condition d'utilisations</a></li>
											@if (config('app.module.servers'))
											<li class="lvl2"><a href="{{ route('servers') }}">Statut des serveurs</a></li>
											@endif
											@if (config('app.module.staff'))
											<li class="lvl2"><a href="{{ route('staff') }}">L'équipe</a></li>
											@endif
											@if (config('app.module.support'))
											<li class="lvl2"><a href="{{ route('support.tickets') }}">Support</a></li>
											<li class="lvl2"><a href="{{ route('support.faq') }}">Faq</a></li>
											@endif
								  		</ul>
									</li>
									@if (config('app.module.private_page'))
					  				<li class="lvl1 nopointer">
								  		<a href="javascript:void(0);">Annuaires</a>
							  			<ul>
									  		<li class="lvl2"><a href="/fr/mmorpg/communaute/annuaires/pages-persos">Personnages</a></li>
											<li class="lvl2"><a href="/fr/mmorpg/communaute/annuaires/pages-guildes">Guildes</a></li>
								  		</ul>
									</li>
									@endif
					  				<li class="lvl1 nopointer">
								  		<a href="javascript:void(0);">le coin des joueurs</a>
							  			<ul>
							  				@if (config('app.module.ladder'))
											<li class="lvl2"><a href="{{ route('ladder.home') }}">Classements</a></li>
											@endif
											@if (config('app.module.bourse_kamas'))
											<li class="lvl2"><a href="/fr/achat-bourses-kamas-ogrines">Bourse aux kamas</a></li>
											@endif
											@if (config('app.module.gift_code'))
											<li class="lvl2"><a href="/fr/mmorpg/communaute/codes">Code Cadeau</a></li>
											@endif
											<li class="lvl2"><a href="/fr/mmorpg/communaute/codes">Vote & Gagne des points</a></li>
											<li class="lvl2"><a href="/fr/mmorpg/communaute/codes">Acheter des points</a></li>
											<li class="lvl2"><a href="{{ route('join') }}">Nous rejoindre</a></li>
								  		</ul>
									</li>
								</ul>
							</li>
							<li class="lvl0 sep">
								<a href="{{ config('app.social.forum') }}" target="_blank">Forum</a>
							</li>
			  			</span>
					</ul>
				</div>          
				<div class="ak-navbar-right ak-has-search">
					@if (Auth::guest())
					<div class="ak-nav-not-logged">
  						<div class="ak-connect-links">
							<a href="{{ route('user.login') }}" class="login">
	  							<span>Connexion</span>
	  							<img class="img-responsive" src="{{ asset('img/avatar/1.jpg') }}" alt="Avatar" />
							</a>
							<a href="{{ route('user.register') }}" class="register">Inscription</a>
  						</div>
					</div>
					@else
					<div class="ak-button-modal ak-nav-logged" data-hasqtip="7" aria-describedby="qtip-7">
    					<div class="ak-logged-account">
          					<span class="ak-nickname">{{ Auth::user()->pseudo }}</span>
                    		<span class="avatar">
      							<img src="{{ asset('img/avatar/'.Auth::user()->avatar.'.jpg') }}" alt="Avatar">
    						</span>
      					</div>
					</div>
					<script type="application/json">{"target":".ak-box-logged"}</script>
					@endif
					@if (config('app.module.search'))   
					<a class="ak-navbar-search" data-navbar-search>
		  				<form action="#" method="get">
							<input class="ak-autocomplete" autocapitalize="off" autocorrect="off" name="q" type="text" value="Rechercher..."/>
							<input type="submit" value="ok" />
		  				</form>
					</a>
					@endif
	  			</div>
	  		</div>
		</nav>
		@if (Auth::check())
		<div class="ak-idbar-box ak-box-logged">
  			<div class="ak-row ak-account-header">
        		<div class="ak-row-cell ak-logged-avatar">
      				<div class="ak-logged-avatar-container">
        				<img src="{{ asset('img/avatar/'.Auth::user()->avatar.'.jpg') }}" class="">
        				<a href="#" target="_blank" class="ak-picto ak-icon-change-avatar">
          					<div class="ak-avatar-mask">
            					<span class="ak-avatar-mask-infos">Changer d'avatar</span>
          					</div>
        				</a>
      				</div>
    			</div>
            	<div class="ak-row-cell ak-logged-infos">
      				<div class="ak-infos-dofus">
        				<span class="ak-infos-nickname">{{ Auth::user()->pseudo }}</span>
              			<a href="{{ route('user.manage') }}" class="ak-subscribe-link btn btn-primary btn-lg">Mon compte</a>
					</div>
    			</div>
      		</div>
  			<div class="ak-account-infos">
            	<div class="ak-row ak-infos-ogrines">
            		<div class="ak-row-cell ak-infos-logged-picto"><span class="ak-infos-picto"></span></div>
            		<div class="ak-row-cell ak-infos-logged">
                		<span class="ak-infos-title">Ogrines : </span>
                		<span class="ak-infos-nb">{{ Auth::user()->points }}</span>
                        <a href="#" class="ak-infos-link">
                        	Acheter des Ogrines                    
						</a>
                    </div>
        		</div>
        		<div class="ak-infos-row ak-account-manage">
      				<div class="ak-ankama-logo"></div>
      				<div class="ak-infos-logged">
        				<a class="ak-infos-logged-link" href="{{ route('user.manage') }}" target="_blank">Gestion de compte</a>
        				<a class="ak-infos-logged-link" href="https://account.ankama.com/fr/securite" target="_blank">Protégez votre compte !</a>
                  		<a class="btn btn-default" href="{{ route('user.logout') }}">Déconnexion</a>
              		</div>
    			</div>
  			</div>
		</div>
		@endif
		<div class="ak-idbar-box ak-box-lang">
	  		<a href="{{ route('homepage') }}" hreflang="fr" class="ak-flag-fr">FR</a>
  		</div>
	  	<!-- Keep in order largest -> lowest device resolution -->
	  	<div class="largedesktop device-profile visible-lg" data-deviceprofile="largedesktop"></div>
	  	<div class="desktop device-profile visible-md" data-deviceprofile="desktop"></div>
	  	<div class="tablet device-profile visible-sm" data-deviceprofile="tablet"></div>
	  	<div class="mobile device-profile visible-xs" data-deviceprofile="mobile"></div>
	</header>
	<!-- Mobile menu -->
  	<aside class="ak-slidemenu">
  		@if (config('app.module.search'))
		<div class="ak-navbar-search-mob">
	  		<form action="#" method="get">
				<input class="ak-autocomplete ui-autocomplete-input" name="q" type="text" value="Rechercher..." autocomplete="off">
				<input type="submit" value="">
	  			<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul>
	  		</form>
		</div>
		@endif
		<div class="menu-container"></div>
		<div class="menu-buttons">
	  		<div class="ak-button-modal ak-flags-links">
				<a class="ak-flag" href="#lang"></a>
	  		</div>
			<script type="application/json">{"tooltip":{"position":{"my":"left top","at":"bottom left"},"hide":{"event":"mouseleave"}}}</script>      
			<div class="ak-idbar-box ak-box-lang">
	  			<a href="{{ route('homepage') }}" hreflang="fr" class="ak-flag-fr">FR</a>
  			</div>
  			@if (config('app.module.support'))
	  		<a class="btn-default ak-support-link" href="#" target="_blank">Support</a>
	  		@endif
		</div>
  	</aside>
  	<script type="application/json">{"triggerElement":".navbar-header .burger-btn","fromTarget":"ul.nav.navbar-nav"}</script>
	<div class="ak-mobile-menu-scroller">
		@yield('content')
  		<a class="ak-backtotop" href="javascript:void(0);"></a>
	  	<footer>
	  		<div class="ak-footer-content">
	  			<div class="row ak-block1">
	  				<div class="col-md-9 ak-block-links">  
		  				<div class="col-md-6 clearfix">
							<div class="col-xs-6">
			  					<div class="ak-list">
									<div>
				  						<span class="ak-link-title">le jeu dofus</span>
									</div>
								  	<a href="/fr/mmorpg/telecharger">Télécharger le jeu</a>
								  	<a href="/fr/mmorpg/encyclopedie/classes">Encyclopédie</a>
								  	<a href="/fr/mmorpg/communaute/parrainage">Parrainage</a>
								  	<a href="/fr/mmorpg/tutoriels">Tutoriels</a>
								  	<a href="/fr/boutique">Boutique</a>
								  	<a href="http://forum.dofus.com/fr">Forum dofus</a>
								  	<a href="https://secure.dofus.com/fr/achat-bourses-kamas-ogrines">Bourse aux Kamas</a>
							  	</div>
							</div>
					  		<div class="col-xs-6">
			  					<div class="ak-list">
									<div>
				  						<span class="ak-link-title">L'UNIVERS DOFUS</span>
									</div>
								  	<a href="http://www.dofus-la-serie.com/fr">Dofus la série</a>
								  	<a href="http://www.ankama-editions.com/fr/catalog/label/49-dofus.html">Mangas, bd, artbook</a>
								  	<a href="http://www.krosmaster.com/fr">Krosmaster arena</a>
								  	<a href="/fr/plus-dofus/battles">Dofus battle 1 &amp; 2</a>
								  	<a href="http://www.wakfu.com/fr">Wakfu</a>
							  	</div>
							</div>
					  	</div>
		  				<div class="col-md-6 clearfix">
							<div class="col-xs-6">
			  					<div class="ak-list">
									<div>
				  						<span class="ak-link-title">MON COMPTE</span>
									</div>
								  	<a href="/fr/mmorpg/jouer">Creer un compte</a>
								  	<a href="/fr/boutique/18-abonnements">S'abonner</a>
								  	<a href="javascript:void(0);" class="ak-button-login">Se connecter</a>
								  	<a href="/fr/boutique/24-ogrines">Acheter des Ogrines</a>
								  	<a href="/fr/boutique/296-kroshop">Gagner des Krozs</a>
								  	<a href="https://support.ankama.com/hc/fr/articles/115005030228" target="_blank">Sécurité du compte</a>
							  	</div>
							</div>
					  		<div class="col-xs-6">
			  					<div class="ak-list">
									<div>
				  						<span class="ak-link-title">SUPPORT</span>
									</div>
								  	<a href="https://support.ankama.com/hc/fr#dofus">Impossible de jouer</a>
								  	<a href="https://account.ankama.com/fr/compte/recuperation-mot-de-passe" target="_blank">Mot de passe perdu</a>
								  	<a href="https://account.ankama.com/fr/compte/securiser-mon-compte" target="_blank">Compte volé</a>
								  	<a href="/fr/codes">Codes cadeaux</a>
								  	<a href="https://support.ankama.com/hc/fr/requests/new">Nous Contacter</a>
							  	</div>
							</div>
					  	</div>
			  		</div>
	  				<div class="col-md-3 ak-block-download">
						<a href="{{ route('join') }}" class="btn btn-primary btn-lg">Télécharger {{ config('app.name') }}</a>
						@if (config('app.module.support'))
						<a class="ak-problem" href="#">Un problème ? Contactez le support.</a>
						@endif
			  			<div class="ak-social-network">
			  				@if (config('app.module.facebook'))
					  		<a href="{{ config('app.social.facebook') }}" class="fb" target="_blank"></a>
					  		@endif
					  		@if (config('app.module.twitter'))
							<a href="{{ config('app.social.twitter') }}" class="tw" target="_blank"></a>
							@endif
							@if (config('app.module.youtube'))
							<a href="{{ config('app.social.youtube') }}" class="yo" target="_blank"></a>
							@endif
						</div>
	  				</div>
				</div>
				<div class="row ak_legal">
					<div id="col-md-12">
	  					<div class="ak-legal">
  							<div class="row">
		  						<div class="col-sm-1"></div>
			  					<div class="col-sm-8">
									<p>© {{ date('Y') }} <a href="{{ route('homepage') }}">{{ config('app.name') }}</a>. Tous droits réservés. <a href="{{ route('cgu') }}" target="_blank">Conditions d'utilisation</a></p>
	  							</div>
	  							<div class="col-sm-3"><span class="prevention"></span></div>
	  						</div>
						</div>    
					</div>
  				</div>
			</div>
		</footer>
  		<div class="ak-mobile-menu-overlay"></div>
	</div>
  	<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
  	<script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
	@yield('javascript')
</body>
</html>