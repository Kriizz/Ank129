@inject('newsLib', 'App\Library\News')

@extends('master')

@section('title', 'Actualités')

@section('stylesheet')
<link type="text/css" rel="stylesheet" href="{{ asset('css/homepage.css') }}" />
@endsection

@section('content')
<div class="ak-pagetop ak-container">
	<div class="ak-pagetop-child">
		<div class="ak-container container">
			<div>
				<div class="row">
					<div class="col-sm-9">
						<nav>
							<div class="ak-breadcrumb-spacer"></div>
							<div class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
								<a rel="index" class="ak-first" href="{{ route('homepage') }}" itemprop="url">
									<span itemprop="title">Accueil</span>
								</a>
								<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
									<a href="{{ route('news.all') }}" itemprop="url">
										<span itemprop="title">Actualités</span>
									</a>
								</div>
							</div>
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
						<div class="ak-title-container">
							<h1 class="ak-return-link">
								<a><span class="ak-icon-big ak-news"></span></a> 
								@if (Request::input('cat') == null)
								Actualités récentes
								@else
								{{ $newsLib->getType(Request::input('cat')) }}
								@endif
							</h1>
						</div>
						<div id="ak-filters-move-target" class="ak-filters-move-target"></div>
						<a id="list" class="ak-anchor"></a>
						<div class="ak-list-paginated">
							<div class="ak-item-list ak-grid-padding">
								<div class="row">
									@foreach ($news as $new)
									<div class="col-sm-6">  
										<div class="ak-item-elt ak-universe-key-mmorpg">
											<div class="ak-item-elt-content">
												<a class="ak-link-img" href="{{ route('news.detail', [$new->id, str_slug($new->title)]) }}">
													<img class="img-responsive" data-max="1200" data-src="{{ asset('img/news/'.$new->img) }}" alt="">
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
																	<a class="ak-ajaxloader" data-target=".ak-main-page" href="{{ route('news.all', ['cat' => $new->type]) }}">{{ $newsLib->getType($new->type) }}</a> -
																</span>
																{{ date_format(date_create($new->date), 'd/m/Y') }}                     
															</span>
														</span>
													</div>
													<div class="ak-item-elt-desc">
														<p class="MsoSubtitle"><span corbel="">{{ $new->intro }}</span></p>
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
							@include('pagination.simple', ['paginator' => $news])
						</div>
					</div>
				</div>
				<aside class="col-md-3">
					<div class="ak-container ak-main-aside">
						<div class="ak-container">
							<div class="ak-filters">
								<div class="ak-title-filters">
									<span class="ak-icon-med ak-filter"></span>
									Filtrer la liste<span class="ak-picto-common ak-picto-more-less-white"></span>
								</div>
								<form>
									<div data-name="item_filters[CATEGORY]" class="ak-list-filters">
										<div class="ak-filter-selection">
											<span class="ak-picto-puce ak-picto-common"></span>
											Catégorie        
											<a class="ak-picto-close ak-toggle ak-picto-common"></a>
										</div>
										<div class="ak-list-filters-inner" style="display:block">
											<ul class="ak-list-filters-check ak-full-height">
												<li class="ak-has-icon">
													<a href="{{ route('news.all') }}" class="ak-ajaxloader" data-target=".ak-main-page">
														<label class="ak-label">
															<span class="ak-icon-med ak-bg-icon ak-egg"></span>              
															Toutes            
														</label>
													</a>
												</li>
												@foreach ($newsLib->types as $id => $type)
												<li class="ak-has-icon">
													<a href="{{ route('news.all', ['cat' => $id]) }}" class="ak-ajaxloader" data-target=".ak-main-page">
														<label class="ak-label">
															<div class="ak-icon-med">
																<img src="{{ asset('img/type/'.$id.'.png') }}" />
															</div>
															{{ $type }}          
														</label>
													</a>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
								</form>
							</div>
							<script type="application/json">{"sMode":"onChange","bMobileToggleAll":false}</script>
						</div>
						@include ('aside.social')
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>
@endsection