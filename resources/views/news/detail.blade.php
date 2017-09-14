@inject('newsLib', 'App\Library\News')

@extends('master')

@section('title', 'Actualités - '.$new->title)

@section('header', 'ak-background-type-internal')

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
						<div class="ak-title-container ak-backlink">
							<h1 class="ak-return-link">
								<a href="{{ route('news.all', ['cat' => $new->type]) }}">
									<span class="ak-icon-big"><img src="{{ asset('img/type/'.$new->type.'.png') }}" /></span>
								</a>       
								{{ $new->title }}
								<span class="ak-subtitle"><span>{{ $newsLib->getType($new->type) }}</span> - {{ date_format(date_create($new->date), 'd/m/Y') }}</span>
							</h1>
							<a href="{{ route('news.all') }}" class="ak-backlink-button">Retour à la liste</a>
						</div>
						<div class="ak-container ak-panel-stack ak-glue">
							<div class="ak-container ak-panel ak-nocontentpadding">
								<div class="ak-panel-content">
									<div class="ak-item ak-admin-text">
										<div class="ak-item-mid">
											<div class="ak-intro">
												<p class="MsoSubtitle"><span corbel="">{{ $new->intro }}</span></p>
											</div>
											<p class="fake"><br /></p>
											{!! $new->text !!}
										</div>
										<div class="ak-item-popular-middle" data-set="ak-item-popular"></div>
										<div class="ak-post-forum-middle" data-set="ak-post-forum"></div>
									</div>
								</div>
							</div>
							<div class="ak-forum-post-panel ak-container ak-panel" id="ak-block-posts">        
								<div class="ak-panel-title" >
									<span class="ak-panel-title-icon"></span>
									Commentaires ({{ $new->comments()->count() }})      
								</div>
								<div class="ak-panel-content">
									<div class="ak-forum-post-list">
										@foreach ($comments as $comment)
										<div class="ak-comments-row">
											<div class="ak-avatar">
												<div class="ak-avatar-img">
													<img src="{{ asset('img/avatar/'.$comment->account->avatar.'.jpg') }}" alt="Avatar" border="0" />        
												</div>
												<div class="ak-avatar-tag">@if ($comment->account->level > 2) <b>Staff</b> @endif</div>
											</div>
											<div class="ak-comment">
												<div class="ak-user">
													<strong>@if($comment->account->level > 2) [{{ $comment->account->pseudo }}] @else {{ $comment->account->pseudo }} @endif</strong>
													<small class="ak-time">{{ date_format(date_create($comment->date), 'd/m/Y à H\hi') }}</small>
												</div>
												<div class="ak-text-content">{{ $comment->text }}</div>
											</div>
										</div>
										@endforeach
									</div>
									@if (Auth::check())
									<form class="ak-forum-post-form ak-ajaxloader" method="post" action="{{ route('news.comment', [$new->id, str_slug($new->title)]) }}" data-target=".ak-forum-post-panel">
										<div class="row ak-comment-container">
											<div class="ak-avatar">
												<img src="{{ asset('img/avatar/'.Auth::user()->avatar.'.jpg') }}" alt="Avatar" border="0" />     
											</div>
											<div class="ak-comment">
												<textarea class="ak-comment-textarea" name="comment" placeholder="Commenter..."></textarea>
											</div>
										</div>
										<input type="submit" class="ak-comment-submit btn btn-primary btn-lg" value="Valider" />
									</form>
									@endif
								</div>
							</div>
							@include('pagination.simple', ['paginator' => $comments])
						</div>
					</div>
				</div>
				<aside class="col-md-3">
					<div class="ak-container ak-main-aside">
						<div class="ak-container ak-panel">        
							<div class="ak-panel-title">
								<span class="ak-panel-title-icon ak-icon-med ak-news"></span>
								Actualités récentes            
							</div>
							<div class="ak-panel-content">
								<div class="ak-listtiny">
									<ul>
										@foreach ($lasts as $last)
										<li>
											<a href="{{ route('news.detail', [$last->id, str_slug($last->title)]) }}">
												<div class="ak-image">
													<img class="img-responsive" src="{{ asset('img/news/'.$last->img) }}"/>
												</div>
												<div class="ak-content">
													<div class="ak-title">{{ $last->title }}</div>
													<div class="ak-comments">{{ $last->comments()->count() }}</div>
												</div>
											</a>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
							<div class="ak-panel-bottomlink">
								<a class="ak-bottom-link" href="{{ route('news.all') }}">Voir toutes les news</a>
							</div>
						</div>
					</div>            
				</aside>
			</div>
		</div>
	</div>
</div>
@endsection