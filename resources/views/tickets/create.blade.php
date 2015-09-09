@extends('app')

@section('title','New Ticket')

@section('styles')
@endsection

@section('content')

<div class="mdl-cell mdl-cell--8-col mdl-grid">

    <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--6-col-desktop">                
        <div class="mdl-card__title mdl-card--expand mdl-color--grey-100">
            <h2 class="mdl-card__title-text">Register new ticket</h2>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <form method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="title" name="title" />
                        <label class="mdl-textfield__label" for="name">Title</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="content" ></textarea>
                        <label class="mdl-textfield__label" for="sample5">Content</label>
                    </div>
                    <br>
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Save
                    </button>
                </form>
                <br>
                <div id="dialog-message">
                    @if (session('status'))
                    <div class="message-success">
                        <strong>Result operation : </strong>
                        <br>
                        {{ session('status') }}
                    </div>
                    @endif
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

<div class="mdl-cell mdl-cell--8-col mdl-grid">

    <div class=" mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet ">                
        <div class="mdl-card__title mdl-card--expand mdl-color--grey-100">
            <h2 class="mdl-card__title-text">Tickets List</h2>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                @if ($tickets->isEmpty())
                <p> There is no ticket.</p>
                @else
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="mdl-data-table__cell--non-numeric">Title</th>
                            <th class="mdl-data-table__cell--non-numeric">Content</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                        <tr>
                            <td>{!! $ticket->id !!}</td>
                            <td class="mdl-data-table__cell--non-numeric">{!! $ticket->title !!}</td>
                            <td class="mdl-data-table__cell--non-numeric">{!! $ticket->content !!}</td>
                            <td>{!! $ticket->status ? 'Pending' : 'Answered' !!} </td>
                            <td>
                                <a href="{!! action('TicketsController@show', $ticket->slug) !!}" style="text-decoration: none;">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

</div>


@endsection

@section('javascript')
@endsection