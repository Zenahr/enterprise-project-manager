<div class="card my-4 mb-4">
    <div class="panel panel-default">
        <h1 class="card-header bg-primary text-white">Recent Comments</h1>
        <div class="panel-body">
            <ul class="media-list mt-4">
                @foreach($comments as $comment)
                <li class="media">
                    <div class="media-left">
                        <img src="http://placehold.it/60x60" class="img-circle">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="user/{{ $comment->user->id }}">{{ $comment->user->first_name }}
                                {{ $comment->user->last_name }}
                                {{ $comment->user->email }} </a>
                            <br>
                            <p>created at {{ $comment->created_at }}</p>
                        </h4>
                        <p>
                            {{ $comment->body }}
                        </p>
                        Proof:
                        <p>
                            {{ $comment->url }}
                        </p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="card my-4 mb-4">
    <h1 class="card-header bg-primary text-white">Join the Conversation</h1>
    <div class="card-body">
        <form method="post" action="{{ route('comments.store') }}">
            {{ csrf_field() }}

            <input type="hidden" name="commentable_type" value="App\Project">
            <input type="hidden" name="commentable_id" value="{{$project->id}}">

            <div class="form-group">
                <label for="comment-content">Comment</label>
                <textarea type="text" placeholder="Enter comment" style="resize: vertical" id="comment-content"
                    name="body" rows="4" spellcheck="false" class="form-control autosize-target text-left" required>
                            </textarea>
            </div>
            <div class="form-group">
                <label for="comment-content">Url (proof of finished work)</label>
                <textarea type="text" placeholder="Enter URL or screenshot" style="resize: vertical"
                    id="comment-content" name="url" rows="4" spellcheck="false"
                    class="form-control autosize-target text-left" required>
                            </textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Add Comment" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>