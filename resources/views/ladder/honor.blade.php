@inject('playerLib', 'App\Library\Player')

@extends('master')

@section('title', 'Classements - Ladder Honneur')

@section('stylesheet')
<link type="text/css" rel="stylesheet" href="{{ asset('css/ladder.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('css/ladder-tiny.css') }}" />
@endsection

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
                                    <a href="{{ route('ladder.home') }}" itemprop="url">
                                        <span itemprop="title">Classements</span>
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
                <div class="main col-md-12">
                    <div class="ak-page-header"></div>
                    <div class="ak-container ak-main-center">
                        <div class="ak-filters-move-target"></div>
                        <a class="ak-anchor"></a>
                        <div class="ak-title-container">
                            <h1 class="ak-return-link">
                                <a><span class="ak-icon-big ak-ladder-kolizeum"></span></a>
                                Ladder JcJ
                            </h1>
                        </div>
                        <div class="ak-page-menu">
                            <nav class="ak-nav-expand">
                                <div class="ak-nav-expand-container">
                                    <ul class="ak-nav-links ak-nav-expand-links">
                                        <li>
                                            <a href="{{ route('ladder.home') }}" >Accueil</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('ladder.exp') }}" >Ladder Général</a>
                                        </li>
                                        <li class"on">
                                            <a href="{{ route('ladder.honor') }}" >Ladder JCJ</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('ladder.guilds') }}" >Ladder Guildes</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ak-nav-expand-more">
                                    <span class="ak-nav-expand-icon ak-picto-common ak-picto-open">+</span>
                                </div>
                            </nav>
                        </div>
                        <div class="ak-container ak-banner-header">
                            <img class="img-responsive" src="{{ asset('img/ladder/header_success.jpg') }}" />
                        </div>
                        <table border="1" class="ak-ladder ak-container ak-table ak-responsivetable">
                            <thead>
                                <tr>
                                    <th data-priority="6">#</th>
                                    <th data-priority="7">Nom</th>
                                    <th data-priority="4">Classe</th>
                                    <th data-priority="3">Niveau</th>
                                    <th data-priority="4">Alignement</th>
                                    <th data-priority="5">Honneur</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($players as $pos => $player)
                                <tr class="@if($pos == 0) ak-first-ladder @else ak-bg-even @endif">
                                    <td class="ak-rank"><span class="ak-icon-position @if($pos < 3) ak-position-{{ $pos+1 }} @endif">{{ $pos+1 }}</span></td>
                                    <td class="ak-name"><span class="ak-breed-icon breed{{ $player->class }}_{{ $player->sexe }}"></span>{{ $player->name }}</td>
                                    <td class="ak-class">{{ $playerLib->getBreed($player->class) }}</td>
                                    <td>{{ $player->level }}</td>
                                    <td>{{ $player->alignement }}</td>
                                    <td>{{ number_format($player->honor, 0, '.', ' ') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection