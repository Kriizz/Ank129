@inject('staffLib', 'App\Library\Staff')

@extends('master')

@section('title', "L'équipe")

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
                                <a><span class="ak-icon-big ak-cm-blog"></span></a>  
                                L'équipe
                            </h1>
                        </div>
                        <table border="1" class="ak-ladder ak-server-list ak-container ak-table ak-responsivetable">
                            <thead>
                                <tr>
                                    <th data-priority="3">Nom</th>
                                    <th data-priority="2">Rang</th>
                                    <th data-priority="3">Connecté</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staffs as $member)
                                <tr class="ak-bg-odd">
                                    <td><img src="{{ asset('img/avatar/'.$member->avatar.'.jpg') }}" alt="Avatar" width="35" /> {{ $member->name }}</td>
                                    <td>{{ $staffLib->getRank($member->rank) }}</td>
                                    <td class="ak-server-access @if($member->account->logged == 1) yes @else no @endif">@if($member->account->logged == 1) Oui @else Non @endif</td>
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