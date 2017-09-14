@extends('master')

@section('title', 'Inscription')

@section('header', 'ak-background-type-internal')

@section('javascript')
<script src='https://www.google.com/recaptcha/api.js'></script>
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
                                Inscription
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
                                                        <div class="ak-form">
                                                            <form method="post" action="">
                                                                {{ csrf_field() }}
                                                                @if ($errors->has('account'))
                                                                <div class="infos_content">
                                                                    <div class="infos_box infos_box_login bg-danger text-danger" style="display: block;">
                                                                        <span class="warning errors_login_failed" style="">{{ $errors->first('account') }}</span>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <div class="form-group">
                                                                    <label class="control-label" for="account">Nom de compte<span class="field-required">*</span></label>
                                                                    <input type="text" class="form-control" autocomplete="off" placeholder="Nom de compte" name="account" value="{{ old('account') }}" id="account">
                                                                </div>
                                                                @if ($errors->has('password'))
                                                                <div class="infos_content">
                                                                    <div class="infos_box infos_box_login bg-danger text-danger" style="display: block;">
                                                                        <span class="warning errors_login_failed" style="">{{ $errors->first('password') }}</span>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <div class="form-group">
                                                                    <label class="control-label" for="password">Mot de passe<span class="field-required">*</span></label>
                                                                    <input type="password" class="form-control" autocomplete="off" placeholder="Mot de passe" name="password" id="password">
                                                                </div>
                                                                @if ($errors->has('nickname'))
                                                                <div class="infos_content">
                                                                    <div class="infos_box infos_box_login bg-danger text-danger" style="display: block;">
                                                                        <span class="warning errors_login_failed" style="">{{ $errors->first('nickname') }}</span>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <div class="form-group">
                                                                    <label class="control-label" for="nickname">Pseudo<span class="field-required">*</span></label>
                                                                    <input type="text" class="form-control" autocomplete="off" placeholder="Pseudo" name="nickname" value="{{ old('nickname') }}" id="nickname">
                                                                </div>
                                                                @if ($errors->has('email'))
                                                                <div class="infos_content">
                                                                    <div class="infos_box infos_box_login bg-danger text-danger" style="display: block;">
                                                                        <span class="warning errors_login_failed" style="">{{ $errors->first('email') }}</span>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <div class="form-group">
                                                                    <label class="control-label" for="email">E-mail<span class="field-required">*</span></label>
                                                                    <input type="text" class="form-control" autocomplete="off" placeholder="E-mail" name="email" value="{{ old('email') }}" id="email">
                                                                </div>
                                                                @if ($errors->has('secret_question'))
                                                                <div class="infos_content">
                                                                    <div class="infos_box infos_box_login bg-danger text-danger" style="display: block;">
                                                                        <span class="warning errors_login_failed" style="">{{ $errors->first('secret_question') }}</span>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <div class="form-group">
                                                                    <label class="control-label" for="secret_question">Question secrète<span class="field-required">*</span></label>
                                                                    <input type="text" class="form-control" autocomplete="off" placeholder="Question secrète" name="secret_question" value="{{ old('secret_question') }}" id="secret_question">
                                                                </div>
                                                                @if ($errors->has('secret_answer'))
                                                                <div class="infos_content">
                                                                    <div class="infos_box infos_box_login bg-danger text-danger" style="display: block;">
                                                                        <span class="warning errors_login_failed" style="">{{ $errors->first('secret_answer') }}</span>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <div class="form-group">
                                                                    <label class="control-label" for="secret_answer">Réponse secrète<span class="field-required">*</span></label>
                                                                    <input type="text" class="form-control" autocomplete="off" placeholder="Réponse secrète" name="secret_answer" id="secret_answer">
                                                                </div>
                                                                @if ($errors->has('g-recaptcha-response'))
                                                                <div class="infos_content">
                                                                    <div class="infos_box infos_box_login bg-danger text-danger" style="display: block;">
                                                                        <span class="warning errors_login_failed" style="">{{ $errors->first('g-recaptcha-response') }}</span>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <div class="form-group">
                                                                    <label class="control-label" for="recaptcha">Confirmez que vous n'êtes pas un robot.<span class="field-required">*</span></label>
                                                                    <div class="g-recaptcha" data-sitekey="{{ config('app.recaptcha.public') }}"></div>
                                                                </div>
                                                                <input type="submit" role="button" class="btn btn-primary btn-lg" value="Se connecter">
                                                            </form>
                                                        </div>
                                                        <div class="ak-login-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ route('join') }}">J'ai déjà un compte. Télécharger {{ config('app.name') }}</a>      
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="ak-create-account" style="padding-top:5px">
                                                <p><strong>Déjà un compte ?</strong></p>
                                                <p><a class="btn btn-lg btn-info" href="{{ route('user.login') }}">Se connecter</a></p>
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