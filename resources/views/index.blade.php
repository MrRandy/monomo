@extends('auth_master')

@section('title','learning')

@section('styles')
@endsection

@section('content')

    <!-- Container main -->
    <div class="mdl-cell mdl-cell--3-col mdl-grid">
    </div>
    <div class="mdl-cell mdl-cell--6-col mdl-grid">

        <div class="mdl-cell mdl-cell--2-col mdl-grid"></div>

        <div class="mdl-cell mdl-cell--8-col mdl-grid">
            
            <div class="demo-updates mdl-card mdl-shadow--4dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                <div class="mdl-card__title mdl-card--expand mdl-color--grey-100">
                    <h2 class="mdl-card__title-text">Index page</h2>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    This is a trial version in Laravel...
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a href="/auth/login" class="mdl-button mdl-js-button mdl-js-ripple-effect">Login</a>
                    <a href="/auth/register" class="mdl-button mdl-js-button mdl-js-ripple-effect">Sign up</a>
                </div>
            </div>
            
        </div>

        <div class="mdl-cell mdl-cell--2-col mdl-grid"></div>

    </div>
    <div class="mdl-cell mdl-cell--3-col mdl-grid">
    </div>
    <!-- End Container main -->

@endsection

@section('javascript')
@endsection
