@extends('master')


@section('title', 'Client Notes')


@section('content')






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Creating Bootstrap Collapsible Accordion Widget </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
</html>
@endsection
