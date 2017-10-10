@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    DE STATZ
                </div>

                <div class="panel-body text-center">
                    @if($linkRating > 50)
                        <strong>WE ALL GONNA SHIT RAINBOW CAKES!</strong>
                    @else
                        <strong>WE ALL EATIN' DEPRI-CAKES...</strong>
                    @endif

                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" style="width: {{ 100 - $linkRating }}%">
                            {{ 100 - $linkRating }}% BAAH
                        </div>
                        <div class="progress-bar progress-bar-success" style="width: {{ $linkRating }}%">
                            {{ $linkRating }}% GOO!
                        </div>
                    </div>

                    <hr>

                    <h1>Total links: {{ $totalLinks }}</h1>
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
