@extends('master')

@section('title', 'Classements')

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
                        <div class="ak-title-container">
                            <h1 class="ak-return-link">
                                <a><span class="ak-icon-big ak-ladder-general"></span></a>    
                                Ladder
                            </h1>
                        </div>
                    </div>
                    <div class="ak-content-sections">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">      
                                <div class="ak-section-general ak-block-hp-ladder">
                                    <div class="ak-section-title">
                                        <a href="{{ route('ladder.exp') }}">
                                            <span class="ak-text">Ladder Général</span>
                                        </a>
                                    </div>
                                    <a class="ak-section-illu" href="{{ route('ladder.exp') }}"></a>
                                    <div class="ak-section-desc">
                                        <table border="1" class="ak-ladder ak-ladder-section ak-container ak-table ak-responsivetable" >
                                            <tbody>
                                                @foreach ($players_exp as $pos => $player)
                                                <tr class="@if ($pos == 0) ak-first-ladder @else ak-bg-even @endif">
                                                    <td class="ak-rank"><span class="ak-icon-position ak-position-{{ $pos+1 }}">{{ $pos+1 }}</span></td>                  
                                                    <td class="ak-name"><span class="ak-breed-icon breed{{ $player->class }}_{{ $player->sexe }}"></span><a>{{ $player->name }}</a></td>                  
                                                    <td class="ak-nb">{{ number_format($player->xp, 0, '.', ' ') }}</td>              
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="ak-section-link-block">
                                        <a href="{{ route('ladder.exp') }}" class="btn btn-primary btn-lg">
                                            Voir le classement complet            
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ak-row-break clearfix visible-xs"></div>
                            <div class="col-sm-6 col-md-4">      
                                <div class="ak-section-success ak-block-hp-ladder">
                                    <div class="ak-section-title">
                                        <a href="{{ route('ladder.honor') }}">
                                            <span class="ak-text">Ladder PvP</span>
                                        </a>
                                    </div>
                                    <a class="ak-section-illu" href="{{ route('ladder.honor') }}"></a>
                                    <div class="ak-section-desc">
                                        <table border="1" class="ak-ladder ak-ladder-section ak-container ak-table ak-responsivetable">
                                            <tbody>
                                                @foreach ($players_honor as $pos => $player)
                                                <tr class="@if ($pos == 0) ak-first-ladder @else ak-bg-even @endif">
                                                    <td class="ak-rank"><span class="ak-icon-position ak-position-{{ $pos+1 }}">{{ $pos+1 }}</span></td>                  
                                                    <td class="ak-name"><span class="ak-breed-icon breed{{ $player->class }}_{{ $player->sexe }}"></span><a>{{ $player->name }}</a></td>                  
                                                    <td class="ak-nb">{{ number_format($player->honor, 0, '.', ' ') }}</td>              
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="ak-section-link-block">
                                        <a href="{{ route('ladder.honor') }}" class="btn btn-primary btn-lg">
                                            Voir le classement complet            
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ak-row-break clearfix visible-xs visible-sm"></div>
                            <div class="col-sm-6 col-md-4">      
                                <div class="ak-section-alliances ak-block-hp-ladder">
                                    <div class="ak-section-title">
                                        <a href="{{ route('ladder.guilds') }}">
                                            <span class="ak-text">Ladder Guildes</span>
                                        </a>
                                    </div>
                                    <a class="ak-section-illu" href="{{ route('ladder.guilds') }}"></a>
                                    <div class="ak-section-desc">
                                        <table border="1" class="ak-ladder ak-ladder-section ak-container ak-table ak-responsivetable" >
                                            <tbody>
                                                @foreach ($guilds as $guild)
                                                <tr class="@if ($pos == 0) ak-first-ladder @else ak-bg-even @endif">
                                                    <td class="ak-rank"><span class="ak-icon-position ak-position-{{ $pos+1 }}">{{ $pos+1 }}</span></td>                  
                                                    <td class="ak-name"><span class="ak-breed-icon breed4_0"></span><a>{{ $guild->name }}</a></td>                  
                                                    <td class="ak-nb">{{ number_format($guild->xp, 0, '.', ' ') }}</td>              
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="ak-section-link-block">
                                        <a href="{{ route('ladder.guilds') }}" class="btn btn-primary btn-lg">
                                            Voir le classement complet            
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="ak-row-break clearfix visible-xs visible-md visible-lg"></div>
                            <div class="ak-row-break clearfix visible-xs visible-sm visible-md visible-lg"></div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection