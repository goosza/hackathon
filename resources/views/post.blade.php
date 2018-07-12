@extends('layout') @section('content')
<div class="container" style="margin-top:30px;">
    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/dXr7Dc3M6po?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    <div class="comments">
        <h2>Comments</h2>
        <ul class="list-group">
           @foreach($comments as $com)
            <li class="list-group-item">
                <strong>{{$com->user->name}}: </strong><span>{{$com->comment}}</span>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="card-block" style="margin-top:20px;">
        <form action="/post" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="comment" placeholder="Your comment here" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-dark">Add Comment</button>
            </div>
        </form>
    </div>
</div>

@endsection
