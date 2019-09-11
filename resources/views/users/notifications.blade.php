@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Notifications</div>

        <div class="card-body">
            <ul class="list-group">
                @foreach ($notifications as $notification)
                    <li class="list-group-item">
                        @if($notification->type === 'App\Notifications\NewReplyAdded')
                            A new Reply was Added to your discussion
                            <strong>
                                    {{ $notification->data['discussion']['title'] }}
                            </strong> Was Marked as best Reply.
                            <a href="{{ route('discussions.show', $notification->data['discussion']['slug'])}}" class="btn btn-outline-info waves-effect btn-sm btn float-right">View Discussion</a>
                        @endif
                        @if ($notification->type === 'App\Notifications\ReplyMarkedAsBestReply')
                            Your Reply To The discussion <strong>{{ $notification->data['discussion']['title'] }}</strong> was marked as best Reply
                            <a href="{{ route('discussions.show', $notification->data['discussion']['slug'])}}" class="btn btn-outline-info waves-effect btn-sm btn float-right">View Discussion</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
