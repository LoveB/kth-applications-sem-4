 <!-- Comment section -->

<div class="comment-container">
      
 
    <h2>Please leave a comment!</h2>
    @if(Auth::user())
    <form id="comment-form">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
        <button id="ajaxSubmitComment">Submit</button>
    </form>
    @else 
    <h4>You must be logged in to submit comments</h4>
    <a id="" href="{{ route('login') }}">Login now >></a>
    @endif 
  
    <div class="comment-area">
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="comment">
                    <h4>{{$post->user->name}}</h4>
                    <p class="date-time">{{$post->created_at}}</p>
                    <p>{{$post->body}}</p>
                    @if(Auth::user())
                        @if($post->user->name == auth()->user()->name)
                        <form >
                            <button id="delete-button" name="{{$post->id}}">DELETE</button>
                            {!! Form::close() !!}
                        @endif  
                    @endif     
                </div>
            @endforeach
        @endif
    </div>
</div>


