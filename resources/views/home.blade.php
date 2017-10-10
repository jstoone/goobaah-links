@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            @if(session('link_posted'))
                @if(session('link_posted') === App\Link::TYPE_GOO)
                    <div class="alert alert-success">
                        {{ ucfirst(session('link_posted')) }} lank pasted!
                    </div>
                @else
                    <div class="alert alert-danger">
                        {{ ucfirst(session('link_posted')) }} lank pasted...
                    </div>
                @endif
            @endif

            <div class="panel panel-default">
                <div class="panel-heading panel-title text-center">
                    DE STATZ
                </div>

                <div class="panel-body text-center">
                    @if($linkRating === 0)
                        <h3>LET ZE BATTLE BEGIN!</h3>
                    @elseif($linkRating > 50)
                        <h3>WE ALL GONNA SHIT RAINBOW CAKES!</h3>
                    @else
                        <h3>WE ALL EATIN' DEPRI-CAKES...</h3>
                    @endif

                    <div class="progress">
                        @if($linkRating > 0)
                        <div class="progress-bar progress-bar-danger" style="width: {{ 100 - $linkRating }}%">
                            {{ 100 - $linkRating }}% BAAH
                        </div>
                        <div class="progress-bar progress-bar-success" style="width: {{ $linkRating }}%">
                            {{ $linkRating }}% GOO!
                        </div>
                        @else
                        <div class="progress-bar progress-bar-info progress-bar-striped active" style="width: 100%">
                            NEUTRAL ZONES
                        </div>
                        @endif
                    </div>

                    <hr>

                    <h4>Total links: {{ $totalLinks }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-danger">
                <div class="panel-heading text-center">
                    BAAH :(
                </div>

                <div class="panel-body">
                    @component('link.form', ['type' => 'baah'])
                        Bada lanka hara..
                    @endcomponent

                    @include('link.baah-list', ['links' => $baahLinks])
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading text-center">
                    GOO :)
                </div>

                <div class="panel-body">
                    @component('link.form', ['type' => 'goo'])
                        Goodie linki hirii..
                    @endcomponent

                    @include('link.goo-list', ['links' => $gooLinks])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
