@extends('../template/mainLayout')
@section('style')

<link href="/css/comment.css" rel="stylesheet" /> 

@endsection
@section('content')

<!-- Main Body -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action="/Review/{{$review->review_id}}"  method='POST'>
                    @csrf
                            @method('PUT')
                    <div class="form-group">
                        <h4>Leave a comment</h4>
                        <label for="message">Message</label>
                        <textarea name="msg" id=""msg cols="30" rows="5" class="form-control" style="">{{$review->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">rating</label>
                        <input type="text" name="rating" id="rating" value="{{$review->rating}}" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{$review->name}}" id="fullname" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{$review->email}}" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="post" class="btn">update Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection