 <!-- Comment section -->

<div class="comment-container">
      
    
    <h2>Please leave a comment!</h2>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
  
    {{Form::textarea('subject', '',['id' => 'subject', 'placeholder' => 'Write something..'])}}
    {{Form::submit('Submit')}}
    {!! Form::close() !!}
  
    <div class="comment-area">
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="comment">
                    <h4>{{$post->user->name}}</h4>
                    <p class="date-time">{{$post->created_at}}</p>
                    <p>{{$post->body}}</p>
                    @if(Auth::user())
                        @if($post->user->name == auth()->user()->name)
                                {!! Form::open(['action' => ['PostsController@delete', $post->id], 'method' => 'POST']) !!}
                                {{Form::submit('Delete', ['id' => 'delete-button'])}}
                                {!! Form::close() !!}
                        @endif  
                    @endif     
                </div>
            @endforeach
        @endif
    </div>
</div>


