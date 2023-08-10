@extends('welcome')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
<section class="vh-100 gradient-custom">
    <div class="container py-2 h-100">
        <div class="row d-flex justify-content-center align-items-center h-10">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                            <form action="{{ route('user.check_user') }}" method="post">
                                @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                                @endif
                                @csrf
                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typeEmailX">Email</label>
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg"
                                        value="{{ old('email') }}" name="email">
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="typePasswordX">Password</label>
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg"
                                        value="{{ old('password') }}" name="password">
                                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a>
                                </p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</section>
@endsection
