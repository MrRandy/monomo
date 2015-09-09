@extends('auth_master')

@section('title','Sign up')

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
                    <h2 class="mdl-card__title-text">Sign up</h2>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <form action="" method="POST">
                            {!! csrf_field() !!}
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="name" name="name" />
                                <label class="mdl-textfield__label" for="name">Name</label>
                            </div>
                            <br/>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="email" name="email" />
                                <label class="mdl-textfield__label" for="email">Email</label>
                            </div>
                            <br/>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="password" name="password" />
                                <label class="mdl-textfield__label" for="password">Password</label>
                            </div>
                            <br/>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="password_confirmation" name="password_confirmation" />
                                <label class="mdl-textfield__label" for="password_confirmation">Password confirmation</label>
                            </div>
                            <br/>
                            <br/>
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                Sign up
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