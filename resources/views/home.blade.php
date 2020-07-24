@extends('master')


@section('title', 'Client Notes')


@section('content')







<body>
    Create Client:

<form action="/create-client" method="post">
    <input type="text" name="title" placeholder="Client Name">

    {{ csrf_field() }}
    <button type="submit">Create Client</button>
</form>

<div class="panel-group" id="accordion"> <!-- accordion 1 -->
   @foreach($clients as $client)
  <div class="panel-group" id="accordion"> <!-- accordion 1 -->
   <div class="panel panel-primary">
        <div class="panel-heading"> <!-- panel-heading -->
            <h4 class="panel-title"> <!-- title 1 -->
            <a data-toggle="collapse" data-parent="#accordion" href="#accordion{{$note->id}}">
            {{$client->title}}
            </a>
           </h4>
        </div>
        <!-- panel body -->
    <div id="accordion{{$client->id}}" class="panel-collapse collapse in">
          <div class="panel-body">
          {{$client->notes}} <a href="note/{{$note->id}}" target="_blank">View Note</a>
          </div>
        </div>
  </div>
    @endforeach
 </div>
</body>

@endsection
