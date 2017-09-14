@extends('master')

@section('title', 'Tickets')

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
                                    <a itemprop="url">
                                        <span itemprop="title">Support</span>
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
        <div class="ak-main-page ak-thread-topicslist">
            <div class="row">
                <div class="main col-md-12">
                    <div class="ak-page-header"></div>
                    <div class="ak-container ak-main-center">
                        <div class="ak-title-container">
                            <h1 class="ak-return-link">
                                <a><span class="ak-icon-big ak-support"></span></a>  
                                Mes tickets
                            </h1>
                        </div>
                        <div class="ak-container ak-panel ak-thread ak-nocontentpadding">
                            <div class="ak-panel-content">
                                <table border="1" class="ak-container ak-table-mosaic ak-table">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Réponses</th>
                                            <th>Activité</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $ticket)
                                        <tr class="ak-not-read">
                                            <td>
                                                <div class="ak-topictitle-container">
                                                    <div class="ak-block-avatar">
                                                        <div class="ak-avatar">
                                                            <img src="{{ asset('img/avatar/'.Auth::user()->avatar.'.jpg') }}" alt="" />
                                                        </div>    
                                                    </div>
                                                    <div class="ak-text-topic">
                                                        <div class="ak-list-pictos"></div>
                                                            <div class="ak-content-text-topic">
                                                                <a href="#" class="ak-title-topic">{{ $ticket->title }}</a>
                                                                <br />
                                                                <div class="ak-desc-topic">
                                                                    {{ $ticket->date }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $ticket->answers()->count() - 1 }}</td>
                                            <td>
                                                <a href="#">{{ $ticket->last_date }}</a>
                                            </td>              
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @include ('pagination.simple', ['paginator' => $tickets])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection