@extends('../template/mainLayout')
@section('style')

<link href="/css/comment.css" rel="stylesheet" /> 

@endsection
@section('content')

<!-- Main Body -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Comments</h1>
                <div class="comment mt-4 text-justify float-left">
                    <img src="" alt="" class="rounded-circle" width="40" height="40"> 
                    
                    <h4>{{$review->name}}</h4>
                    <span>{{$review->created_at}}</span>
                    <p>Rating :{{$review->rating}}\5</p>
                    <br>
                    <p>{{$review->content}}</p>
                    <a type="button " class="btn btn-danger btn-sm" href="">update</a>
                    <button type="button" class="btn btn-warning btn-sm">delete</button>
                    <a type="button" class="btn btn-secondary btn-sm" href="/Review/{{$review->review_id}}">delete</a>
                </div>

            </div>
            
        </div>
    </div>
</section>
@endsection