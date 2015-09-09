@extends('auth_master')

@section('title','Login')

@section('styles')
@endsection

@section('content')


    <!-- Container main -->
    <div class="mdl-cell mdl-cell--3-col mdl-grid"></div>

    <div class="mdl-cell mdl-cell--6-col mdl-grid">

        <div class="mdl-cell mdl-cell--2-col mdl-grid"></div>

        <div class="mdl-cell mdl-cell--8-col mdl-grid">

            <div class="demo-updates mdl-card mdl-shadow--4dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">                
                <div class="mdl-card__title mdl-card--expand mdl-color--grey-100">
                    <h2 class="mdl-card__title-text">Login</h2>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <img src="../../../img/avatar-001.jpg" class="avatar-user">
                        <form action="/auth/login" method="POST">
                            {!! csrf_field() !!}
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="email" name="email" />
                                <label class="mdl-textfield__label" for="sample3">Email</label>
                            </div>
                            <br/>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="password" name="password" />
                                <label class="mdl-textfield__label" for="sample3">Password</label>
                            </div>
                            <br/>
                            <label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                                <input type="checkbox" id="chkbox1" class="mdl-checkbox__input" name="remember" />
                                <span class="mdl-checkbox__label">Remember me</span>
                            </label>
                            <br/>
                            <br/>
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                Login
                            </button>
                        </form>
                        <br>
                        <div id="dialog-message">
                            @if (Session::has('errors'))
                            <div class="message-warning">
                                <strong>Oops! Something went wrong : </strong>
                                <br>
                                @foreach ($errors->all() as $error)
                                * {{ $error }}<br/>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mdl-cell mdl-cell--2-col mdl-grid"></div>

    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-grid"></div>
    <!-- End Container main -->


@endsection

@section('javascript')
@endsection
