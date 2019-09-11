@extends('layouts.app')

@section('content')
    @include('partials.discussion-header')
    <blockquote class="blockquote bq-primary">
        <p class="bq-title">{{$discussion->title}}</p>
        <p>
            {!! $discussion->content !!}
            @if ($discussion->bestReply)
                <div class="card bg-success my-5" style="color: #fff">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img src="{{ Gravatar::get($discussion->bestReply->owner->email)}}" width="40px" height="40px" style="border-radius: 50%" class="mr-2" alt="">
                                <strong>
                                    {{ $discussion->bestReply->owner->name }}
                                </strong>
                            </div>
                            <div>
                                Best Reply
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! $discussion->bestReply->content !!}
                    </div>
                </div>
            @endif
        </p>
    </blockquote>
    @foreach ($discussion->replies()->paginate(3) as $reply)
        <div class="card my-5">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <img width="40px" height="40px" style="border-radius: 50%" src="{{ Gravatar::get($reply->owner->email)}}" alt="">
                        <span>{{ $reply->owner->name }}</span>
                    </div>
                    <div>
                        @auth
                            @if (auth()->user()->id === $discussion->user_id)
                                <form action="{{ route('discussions.best-reply', [ 'discussion' => $discussion->slug, 'reply' => $reply->id ]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary waves-effect btn-sm" onclick="toastr.info('Mark as Best Reply');">Mark as best Reply</button>
                                </form>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
            <div class="card-body">
                {!! $reply->content !!}
            </div>
        </div>
    @endforeach
    {{$discussion->replies()->paginate(3)->links()}}
    <div class="card my-5">
        <div class="card-header">
            Add Reply
        </div>
        <div class="card-body">
            @auth
            <form action="{{ route('replies.store', $discussion->slug) }}" method="post">
                @csrf
                <input type="hidden" id="content" name="content">
                <trix-editor input="content"></trix-editor>
                <button type="submit" class="btn btn-outline-success waves-effect btn-sm" onclick="toastr.success('Add Reply Success');">Add Reply</button>
            </form>
            @else
            <a href="{{ route('login')}}" class="btn btn-outline-info waves-effect">Sign in to added discussion</a>
            @endauth
        </div>
    </div>
@endsection
@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
@endsection

@section('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
@endsection
