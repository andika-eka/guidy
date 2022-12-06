@extends('../template/mainLayout')

@section('style')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="/css/comment.css" rel="stylesheet" /> 

@endsection
@section('content')

<!-- Main Body -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Comments</h1>
                @foreach($reviews->review as $r)
                <div class="comment mt-4 text-justify float-left">
                    <img src="" alt="" class="rounded-circle" width="40" height="40"> 
                    <h4>{{$r->name}}</h4>
                    <span>{{$r->created_at}}</span>
                    <br>
                    <p>{{$r->content}}</p>
                    <a type="button " class="btn btn-danger btn-sm" href="/Review/{{$r->review_id}}/edit">update</a>
                   
                    <a type="button" class="btn btn-secondary btn-sm" href="/Review/{{$r->review_id}}">details</a>
                    <form name="delete" action="/Review/{{$r->review_id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-block" name='delete'>Delete</button>
                        </form>
                </div>
                @endforeach

            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action="/Review" method="POST">
                    @csrf
                    <div class="form-group">
                        <h4>Leave a comment</h4>
                        <label for="message">Message</label>
                        <textarea name="msg" id=""msg cols="30" rows="5" class="form-control" style=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">rating</label>
                        <input type="text" name="rating" id="rating" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="fullname" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                    </div>
                    <div class="form-inline">
                        <input type="checkbox" name="check" id="checkbx" class="mr-1">
                        <label for="subscribe">Subscribe me to the newlettter</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="post" class="btn">Post Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection