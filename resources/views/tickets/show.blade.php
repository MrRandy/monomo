@extends('app')

@section('title','Ticket')

@section('styles')
@endsection

@section('content')

<div class="mdl-cell mdl-cell--8-col mdl-grid">

    <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-desktop">                
        <div class="mdl-card__title mdl-card--expand mdl-color--grey-100">
            <h2 class="mdl-card__title-text">{!! $ticket->title !!}</h2>
        </div>
        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
            <p><strong>Status</strong>: {!! $ticket->status ? 'Pending' : 'Answered' !!}</p>
            <br/>
            <p> {!! $ticket->content !!} </p>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a href="" class="mdl-button mdl-js-button mdl-js-ripple-effect">Update</a>
            <a href="" class="mdl-button mdl-js-button mdl-js-ripple-effect">Remove</a>
        </div>
    </div>

</div>

@endsection

@section('javascript')
@endsection
