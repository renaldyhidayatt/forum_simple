<div class="card-header">
    <div class="d-flex justify-content-between">
        <div>
            <img src="40px" height="40px" style="border-radius: 50%" src="{{{ Gravatar::get( $discussion->author->email )}}}">
            <strong class="ml-2">{{ $discussion->author->name }}</strong>
        </div>
        <div>
            <a href="{{ route('discussions.show', $discussion->slug )}}" class="btn btn-outline-success waves-effect btn-sm">View</a>
        </div>
    </div>
</div>
