@extends('master')

@section('title', 'Statut des serveurs')

@section('stylesheet')
<link type="text/css" rel="stylesheet" href="{{ asset('css/server.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('css/server-colors.css') }}" />
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
                                <a><span class="ak-icon-big ak-servers"></span></a>  
                                Statut des serveurs
                            </h1>
                        </div>
                        <table border="1" class="ak-ladder ak-server-list ak-container ak-table ak-responsivetable">
                            <thead>
                                <tr>
                                    <th data-priority="4">Etat</th>
                                    <th data-priority="3">Nom du serveur</th>
                                    <th data-priority="2">Joueurs</th>
                                    <th data-priority="3">Informations</th>
                                    <th data-priority="1">Population</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (config('app.servers') as $server)
                                <tr class="ak-bg-odd">
                                    <td class="ak-server-online"><span class="ak-icon-med @if($server['online']) ak-server-online @else ak-server-offline @endif"></span>@if($server['online']) En ligne @else Hors ligne @endif</td>
                                    <td class="server server_{{ $server['id'] }}"><span></span> {{ $server['name'] }}</td>
                                    <td>{{ App\Models\Player::count() }}</td>
                                    <td>
                                        <span class="ak-picto-common ak-picto-help ak-tooltip" title="{{ $server['info'] }}"></span>
                                        <script type="application/json">{"tooltip":{"style":{"classes":"ak-tooltip-white"}}}</script>
                                        <span class="ak-picto-common"></span>
                                    </td>
                                    <td class="medium">{{ $server['population'] }}</td>
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