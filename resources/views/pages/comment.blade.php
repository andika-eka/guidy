@extends('../template/mainLayout')

@section('style')
<link href="/css/styles.css" rel="stylesheet" />
<link href="/css/galery.css" rel="stylesheet" />
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
<section class="pt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h4 class="mb-0">Recent Review</h4>
                <p class="fw-light mb-4 pb-2">How is your journey with Guidy?</p>
                @foreach($reviews->review as $r)

                <div class="card-body p-4">

                    <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                            height="60" />
                        <div>
                            <h6 class="fw-bold mb-1">{{$r->name}} - {{$r->rating}}/5</h6>
                            <div class="d-flex align-items-center mb-3">
                                <p class="mb-0">
                                    {{$r->created_at}}
                                </p>
                                <a href="/Review/{{$r->review_id}}/edit" class="link-muted"><i
                                        class="fas fa-pencil-alt ms-2"></i></a>
                                <form name="delete" action="/Review/{{$r->review_id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="link-muted" name='delete'><i
                                            class="fa-solid fa-trash ms-2"></i></button>
                                </form>
                                <a href="/Review/{{$r->review_id}}" class="link-muted"><i
                                        class="fa-solid fa-circle-info"></i></a>
                            </div>
                            <p class="mb-0">
                                {{$r->content}}
                            </p>
                        </div>
                    </div>
                </div>

                <hr class="my-0" />
                @endforeach

            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <div class="card">

                    <form class="card-footer py-3 border-0" style="background-color: #f8f9fa;"  action="/Review" method="POST">
                        @csrf
                        <div class="d-flex flex-start w-100">
                            <img class="rounded-circle shadow-1-strong me-3"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                width="40" height="40" /> 
                                <div class="form-outline w-100">
                                <div>{{$user->fname}} {{$user->lname}}</div>
                                <label class="form-label" for="form5Example1">rating</label>
                                <input type="number" name="rating" id="form5Example1" class="form-control" />
                                <label class="form-label" for="textAreaExample">Message</label>
                                <textarea class="form-control" name="msg" id="textAreaExample" rows="4"
                                    style="background: #fff;"></textarea>

                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="submit" class="btn btn-primary btn-sm">Post review</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection
