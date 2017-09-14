@extends('master')

@section('title', 'Connexion')

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
                                <a><span class="ak-icon-big ak-progress"></span></a>
                                Connexion
                            </h1>
                        </div>
                    </div>
                    <div class="ak-container ak-panel-stack">
						<div class="ak-container ak-panel">
							<div class="ak-panel-content">
                                <div class="ak-login-page panel-main">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="ak-login-account">
                                                <div class="ak-login-block">
                                                    <div class="ak-container">
                                                        @if ($errors->any() || Session::has('error'))
                                                        <div class="infos_content">
                                                            <div class="infos_box infos_box_login bg-danger text-danger" style="display: block;">
                                                                <span class="warning errors_login_failed" style="">Les identifiants sont incorrects.</span>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="ak-form">
                                                            <form method="post" action="">
                                                                {{ csrf_field() }}
                                                                <div class="form-group">
                                                                    <label class="control-label" for="account">Nom de compte</label>
                                                                    <input type="text" class="form-control" autocomplete="off" placeholder="Nom de compte" name="account" value="{{ old('account') }}" id="account">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="password">Mot de passe</label>
                                                                    <input type="password" class="form-control" autocomplete="off" placeholder="Mot de passe" name="password" id="password">
                                                                </div>
                                                                <input type="submit" role="button" class="btn btn-primary btn-lg" value="Se connecter">
                                                            </form>
                                                        </div>
                                                        <div class="ak-login-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('password.forget') }}">Mot de passe oublié ?</a>      
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="ak-create-account" style="padding-top:5px">
                                                <p><strong>Pas encore de compte ?</strong></p>
                                                <p><a class="btn btn-lg btn-info" href="{{ route('user.register') }}">Créer un compte</a></p>
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