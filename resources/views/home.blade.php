@extends('master')


@section('title', 'Client Notes')


@section('content')







<body>
    Create Note:

<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    {{ csrf_field() }}
    <button type="submit">Create Note</button>
</form>

<div class="panel-group" id="accordion"> <!-- accordion 1 -->
   @foreach($notes as $note)
  <div class="panel-group" id="accordion"> <!-- accordion 1 -->
   <div class="panel panel-primary">
        <div class="panel-heading"> <!-- panel-heading -->
            <h4 class="panel-title"> <!-- title 1 -->
            <a data-toggle="collapse" data-parent="#accordion" href="#accordion{{$note->id}}">
            {{$note->title}}
            </a>
           </h4>
        </div>
        <!-- panel body -->
    <div id="accordion{{$note->id}}" class="panel-collapse collapse in">
          <div class="panel-body">
          {{$note->content}} <a href="note/{{$note->id}}" target="_blank">View Note</a>
          </div>
        </div>
  </div>
    @endforeach
 </div>
</body>

@endsection
