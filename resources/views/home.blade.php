@extends('master')


@section('title', 'Homepage')


@section('content')

Create Note:

<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    {{ csrf_field() }}
    <button type="submit">Create Note</button>
</form>

Recent Notes:



<ul>
    @foreach($notes as $note)
    <li>

       <strong> {{ $note->title }} </strong>
        <br/>
        {{ $note->content }}
        <br/>
        {{ $note->created_at->diffForHumans() }}
        <br/>
    <a href="/note/{{$note->id}}">View Note</a>
    </li>
    @endforeach
</ul>
@endsection
