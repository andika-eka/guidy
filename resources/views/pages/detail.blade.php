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
<section class="pt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="card-body p-4">

                <div class="d-flex flex-start">
                    <img class="rounded-circle shadow-1-strong me-3"
                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                        height="60" />
                    <div>
                        <h6 class="fw-bold mb-1">{{$review->name}} - {{$review->rating}}/5</h6>
                        <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                                {{$review->created_at}}
                            </p>
                            <a href="/Review/{{$review->review_id}}/edit" class="link-muted"><i
                                    class="fas fa-pencil-alt ms-2"></i></a>
                            <form name="delete" action="/Review/{{$review->review_id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="link-muted" name='delete'><i
                                        class="fa-solid fa-trash ms-2"></i></button>
                            </form>
                            <a href="/Review/{{$review->review_id}}" class="link-muted"><i
                                    class="fa-solid fa-circle-info"></i></a>
                        </div>
                        <p class="mb-0">
                            {{$review->content}}
                        </p>
                    </div>
                </div>
            </div>

            <hr class="my-0" />


        </div>
    </div>
</section>
@endsection
