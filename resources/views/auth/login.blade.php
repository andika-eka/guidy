@extends('../template/mainLayout')
@section('style')
<link href="./css/styles.css" rel="stylesheet" />
<link href="/css/galery.css" rel="stylesheet" />
@endsection
@section('content')
<body>
    <!-- Section: Design Block -->
        <section class="text-center">
            <!-- Background image -->
            <div class="p-5 bg-image" style="background-color: rgb(68, 172, 190); height: 300px"></div>
            <!-- Background image -->

            <div class="card mx-4 mx-md-5 shadow-5-strong" style="
						margin-top: -100px;
						background: hsla(0, 0%, 100%, 0.8);
						backdrop-filter: blur(30px);
					">
                <div class="card-body py-5 px-md-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="fw-bold mb-5">Login to Guidy</h2>
                            <form  action ="/login" method ="post">
                                @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email address</label>
                                    <input type="email" id="email" class="form-control" name="email"/>
                                    <small style="color: red" id="err_email"></small>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="pass">Password</label>
                                    <input type="password" id="pass" class="form-control" name="password"/>
                                    <small style="color: red" id="err_pass"></small>
                                </div>


                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Log in
                                    </button>
                                <p>
                                
                                    <a  class="">
                                        sign up
                                    </a>
                                </p>
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Section: Design Block -->
    @endsection
