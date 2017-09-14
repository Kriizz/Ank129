@inject('newsLib', 'App\Library\News')

@extends('master')

@section('stylesheet')
<link type="text/css" rel="stylesheet" href="{{ asset('css/homepage.css') }}" />
@endsection

@section('header', 'ak-background-type-homepage')

@section('content')
<div class="ak-container ak-carrousel-bg">
  	<div class="ak-video-home ak-no-video"></div>
	<div class="img_sm"></div>
	@if (config('app.message.active'))
	<div class="ak-carrousel-bg-title ak-carrousel-bg-title-{{ config('app.message.position') }}">
		<div class="ak-block-title">
			<a href="http://www.dofus.com/fr/mmorpg/actualites/maj/668330-belle-betes" class="ak-title-link">
				<div class="ak-layer">
					<span class="ak-title">{{ config('app.message.title') }}</span><br/>                        
					<span class="ak-subtitle">{{ config('app.message.desc') }}</span>                        
					<span class="ak-banner-more">+</span><br/>
				</div>
			</a>
		</div>
	</div>
	@endif
</div>
<div class="ak-pagetop ak-container">
	<div class="ak-pagetop-child">
		<div class="ak-container container">
			<div>
				<div class="row">
  					<div class="col-sm-9">
						<nav>
	  						<div class="ak-breadcrumb-spacer"></div>
		  				</nav>
 	 				</div>
	  				<div class="col-sm-3 text-center">
	  					<span><a class="btn btn-info ak-btn-big ak-btn-play" href="{{ route('join') }}">Jouer !</a></span>    
	  				</div>
  				</div>
			</div>
		</div>
	</div>
</div>
<div class="container ak-main-container">
	<div class="ak-main-content">
		<div class="ak-main-page">
	  		<div class="row">
	  			<div class="main col-md-9">
					<div class="ak-page-header"></div>
					<div class="ak-container ak-main-center">
						<div class="ak-homepage-menu">
							<div class="ak-homepage-menu-content" style="display: none;">
							  	<a href="{{ route('news.all') }}" class="ak-universe-all">Toute l'actualité</a>
							  	@foreach ($newsLib->types as $id => $type)
							  	<a href="{{ route('news.all', ['cat' => $id]) }}" class="ak-universe-mmorpg">{{ $type }}</a>
							  	@endforeach
			  				</div>
							<div class="ak-homepage-menu-handler">
		  						<a href="{{ route('news.all') }}" class="ak-universe-all">Toute l'actualité</a>
							</div>
	  					</div>
						<div class="ak-list-paginated">
							<div class="ak-item-list ak-grid-padding">
								<div class="row">
									@foreach ($news as $new)
	  								<div class="col-sm-6">  
										<div class="ak-item-elt">
  											<div class="ak-item-elt-content">
												<a class="ak-link-img" href="{{ route('news.detail', [$new->id, str_slug($new->title)]) }}">
													<img class="img-responsive" data-max="1200" data-src="{{ asset('img/news/'.$new->img) }}" alt="" />
		  										</a>
												<div class="ak-item-elt-inner">
	  												<div class="ak-item-elt-title">
				  										<a href="{{ route('news.all', ['cat' => $new->type]) }}">
															<img src="{{ asset('img/type/'.$new->type.'.png') }}" alt="{{ $newsLib->getType($new->type) }}" title="{{ $newsLib->getType($new->type) }}" />
		  												</a>
														<span class="ak-text">
		  													<a href="{{ route('news.detail', [$new->id, str_slug($new->title)]) }}">{{ $new->title }}</a>
		  													<span class="ak-publication">
																<span>
						  											<a href="{{ route('news.all', ['cat' => $new->type]) }}">{{ $newsLib->getType($new->type) }}</a> -
																</span>
																{{ date_format(date_create($new->date), 'd/m/Y') }}                     
															</span>
														</span>
	  												</div>
	  												<div class="ak-item-elt-desc">
		 												{{ $new->intro }}
	  												</div>
												</div>
												<div class="ak-ellipsis-text"></div>
												<div class="ak-bottom">
	  												<div class="ak-comments pull-left">
														<a class="comment" href="{{ route('news.detail', [$new->id, str_slug($new->title)]) }}">
		  													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="866.001px" height="866.013px" viewBox="930.736 591.271 866.001 866.013" enable-background="new 930.736 591.271 866.001 866.013" xml:space="preserve">
																<path fill="#010202" d="M930.736,1186.67v54.084c0,29.905,24.229,54.148,54.124,54.148h54.115l0,0h54.134v162.382l243.555-162.382h351.804c0.021,0,0.03,0,0.04,0h54.104c29.885,0,54.125-24.243,54.125-54.148v-595.37c0-29.897-24.24-54.112-54.125-54.112h-108.26h-108.248l0,0h-432.976c-0.01,0-0.01,0-0.01,0H984.86c-29.895,0-54.124,24.214-54.124,54.112v54.127l0,0V1186.67L930.736,1186.67zM1038.975,699.511h108.27l0,0h432.985l0,0h108.238v378.861v108.298h-108.238l0,0h-243.565l-135.306,81.165v-81.165h-54.114l0,0h-108.27V699.511z M1526.104,1078.372h54.114V970.125h-432.975v108.298h378.86V1078.372z M1580.219,807.766h-432.975v108.24h432.975V807.766z"/>
															</svg>
		  													<span>{{ $new->comments()->count() }}</span>
														</a>
	  												</div>
	  												<div class="pull-right">
														<a class="ak-more" href="{{ route('news.detail', [$new->id, str_slug($new->title)]) }}">En savoir<span>+</span></a>
	  												</div>
	  												<div class="ak-bottom-infos pull-left"></div>
		  										</div>
  											</div>
										</div>
	  								</div>
	  								@endforeach
								</div>
  							</div>
  						</div>
  					</div>
				</div>
				<aside class="col-md-3">
					<div class="ak-container ak-main-aside">
						<div class="row ak-container">
							<div class="ak-column ak-container col-md-12">
								@include ('aside.other')
								@include ('aside.shop')
							</div>
						</div>
						<div class="row ak-container">
							<div class="ak-column ak-container col-sm-4 col-md-12">
								@if (config('app.module.youtube'))
								<div class="ak-container ak-panel ak-youtube-aside">
									<div class="ak-panel-title">
			  							<span class="ak-panel-title-icon ak-icon-med ak-picto-yt"></span>
										Youtube            
		  							</div>
									<div class="ak-panel-content">
										<div class="ak-container ak-youtube-channel">
											<a href="https://www.youtube.com/watch?v=hdmhbRTB5C0" class="ak-channel-img" target="_blank">
	  											<img class="img-maxresponsive" src="https://i.ytimg.com/vi/hdmhbRTB5C0/hqdefault.jpg">
											</a>
											<div class="ak-container ak-youtube-links">
											  	<a href="https://www.youtube.com/watch?v=hdmhbRTB5C0" target="_blank">DOFUS Time – La belle et les bêtes – MàJ 2.41</a><a href="https://www.youtube.com/watch?v=hdmhbRTB5C0" target="_blank">37448</a>
											</div>
  										</div>
									</div>
  									<div class="ak-panel-bottomlink">
										<a class="ak-bottom-link" href="{{ config('app.social.youtube') }}" target="_blank">
	  										Visiter la chaîne Youtube    
	  									</a>
  									</div>
								</div>
								@endif
								<div class="ak-container ak-panel">        
									<div class="ak-panel-title" >
			  							<span class="ak-panel-title-icon ak-icon-med ak-forum"></span>
										<a href="{{ config('app.social.forum') }}" target="_blank">Forum</a>            
		  							</div>
									<div class="ak-panel-content">
  										<div class="ak-topic-list">
  											<ul>
											  	<li>
													<div class="ak-title">
											 	 		<a href="http://forum.dofus.com/fr/1081-actualite/1762428-mimibiotes-partagez-votre-skin-devs?poid=11893226">[Mimibiotes] Partagez votre skin avec les devs !</a>
													</div>
													<div class="ak-author">
											  			Par <a href="http://forum.dofus.com/fr/3950f6a38178-utilisateur-Middox21" target="_blank">Middox21</a> le 04/06/2017 - 18:32        
											  		</div>
													<div class="ak-thread">
											  			<a href="http://forum.dofus.com/fr/1081-actualite">Actualité</a>
											  			<span class="ak-posts">
															<span class="ak-comments">1231</span>
											  			</span>
													</div>
										  		</li>
											  	<li>
													<div class="ak-title">
											  			<a href="http://forum.dofus.com/fr/1571-projets/2223100-quelles-vos-attentes-concernant-interfaces?poid=11891432">Quelles sont vos attentes concernant les interfaces ?</a>
													</div>
													<div class="ak-author">
											  			Par <a href="http://forum.dofus.com/fr/176ab0779234-utilisateur-arrennnna222114556" target="_blank">arrennnna222114556</a> le 03/06/2017 - 03:42        
											  		</div>
													<div class="ak-thread">
											  			<a href="http://forum.dofus.com/fr/1571-projets">Projets</a>
											  			<span class="ak-posts">
															<span class="ak-comments">114</span>
											  			</span>
													</div>
										  		</li>
											  	<li>
													<div class="ak-title">
											  			<a href="http://forum.dofus.com/fr/1557-discussions-generales/2234140-version-2-42-beta?poid=11890803">Version 2.42 bêta</a>
													</div>
													<div class="ak-author">
											  			Par <a href="http://forum.dofus.com/fr/20d0aaaa97b9-utilisateur-[lichen]" target="_blank">[lichen]</a> le 02/06/2017 - 18:54        
											  		</div>
													<div class="ak-thread">
											  			<a href="http://forum.dofus.com/fr/1557-discussions-generales">Discussions générales</a>
											  			<span class="ak-posts">
															<span class="ak-comments">4</span>
											  			</span>
													</div>
										  		</li>
	  										</ul>
										</div>
									</div>
  									<div class="ak-panel-bottomlink">
										<a class="ak-bottom-link" href="{{ config('app.social.forum') }}" target="_blank">
	  										Accéder au forum    
	  									</a>
  									</div>
								</div>
							</div>
							@include ('aside.social')
						</div>
					</div>                      
				</aside>
			</div>
	  	</div>
	</div>
</div>
@endsection