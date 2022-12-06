@extends('../template/mainLayout')
@section('style')
<link href="/css/styles.css" rel="stylesheet" />
<style>
        .link-muted {
            color: #aaa;
        }

        .link-muted:hover {
            color: #1266f1;
        }
    </style>

@endsection
@section('content')

<!-- Main Body -->
<section class = "pt-5">
    <div class="container pt-5">
        <div class="row">
        <div class="">
                <div class="card">

                    <form class="card-footer py-3 border-0" style="background-color: #f8f9fa;"id="algin-form" action="/Review/{{$review->review_id}}"  method='POST'>
                        @csrf
                        @method('PUT')
                        <div class="d-flex flex-start w-100">
                            <img class="rounded-circle shadow-1-strong me-3"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                width="40" height="40" /> 
                                <div class="form-outline w-100">
                                <div>{{$user->fname}} {{$user->lname}}</div>
                                <label class="form-label" for="form5Example1">rating</label>
                                <input type="number" name="rating"  value="{{$review->rating}}" id="form5Example1" class="form-control" />
                                <label class="form-label" for="textAreaExample">Message</label>
                                <textarea class="form-control" name="msg" id="textAreaExample" rows="4"
                                    style="background: #fff;">{{$review->content}}</textarea>

                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="submit" class="btn btn-primary btn-sm">Update review</button>
                        </div>
                    </form>
                </div>
                
            </div>
    </div>
</section>
@endsection