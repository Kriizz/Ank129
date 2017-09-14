@extends('master')

@section('title', 'Mon compte')

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
                <div class="main col-md-12">
                    <div class="ak-page-header"></div>
                    <div class="ak-container ak-main-center">
                        <div class="ak-title-container ak-backlink">
                            <h1 class="ak-return-link">
                                <a><span class="ak-icon-big ak-bank"></span></a>
                                Mon compte
                            </h1>
                        </div>
                    </div>
                    <div class="ak-container ak-panel-stack">
						<div class="ak-container ak-panel">
							<div class="ak-panel-content">
                                <div class="ak-login-page panel-main">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="ak-login-account">
                                                <div class="ak-login-block">
                                                    <div class="ak-container">
                                                        <div class="ak-form">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="account">Nom de compte</label>
                                                                    <input type="text" class="form-control" placeholder="Nom de compte" value="{{ Auth::user()->account }}" id="account">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="password">Mot de passe</label>
                                                                    <input type="text" class="form-control" placeholder="Mot de passe" value="********" id="password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="nickname">Pseudo</label>
                                                                    <input type="text" class="form-control" placeholder="Pseudo" value="{{ Auth::user()->pseudo }}" id="nickname">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="email">E-mail</label>
                                                                    <input type="text" class="form-control" placeholder="E-mail" value="{{ Auth::user()->email }}" id="email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="votes">Nombre de votes</label>
                                                                    <input type="text" class="form-control" placeholder="Nombre de votes" value="{{ Auth::user()->votes }}" id="votes">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="ogrines">Ogrines</label>
                                                                    <input type="text" class="form-control" placeholder="Ogrines" value="{{ Auth::user()->points }}" id="ogrines">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="players">Nombre de personnages</label>
                                                                    <input type="text" class="form-control" placeholder="Nombre de personnages" value="{{ Auth::user()->players()->count() }}" id="players">
                                                                </div>
                                                            </form>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection