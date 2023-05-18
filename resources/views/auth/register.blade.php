@extends('layouts.app')

@section('content')


<!-- PAGE TITLE
    ================================================== -->
<header class="py-8 py-md-11" style="background-image: none;">
    <div class="container text-center py-xl-2">
        <h1 class="display-4 font-weight-semi-bold mb-0">Register</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                <li class="breadcrumb-item">
                    <a class="text-gray-800" href="#">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                    Register
                </li>
            </ol>
        </nav>
    </div>
    <!-- Img -->
    <img class="d-none img-fluid" src="..." alt="...">
</header>
<!-- REGISTER
    ================================================== -->
<div class="container mb-11">
    <div class="row no-gutters">
        <div class="col-md-7 col-xl-4 mx-auto">
            <!-- Register -->
            <h3 class="mb-6">Sign Up and Start Learning!</h3>

            <!-- Form Register -->
            <form class="mb-5" method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Username -->
                <div class="form-group mb-5">
                    <label for="modalSignupUsername1">
                        Username
                    </label>
                    <input type="text" class="form-control" id="modalSignupUsername1" placeholder="John" name="name">
                </div>

                <!-- Email -->
                <div class="form-group mb-5">
                    <label for="modalSignupEmail1">
                        Username or Email
                    </label>
                    <input type="email" class="form-control" id="modalSignupEmail1" placeholder="johndoe@creativelayers.com" name="email">
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                    <label for="modalSignupPassword3">
                        Password
                    </label>
                    <input type="password" class="form-control" id="modalSignupPassword3" placeholder="**********" name="password">
                </div>
                <div class="form-group mb-5">
                    <label for="modalSignupPasswordConfirm3">
                        Confirm Password
                    </label>
                    <input type="password" class="form-control" id="modalSignupPasswordConfirm3" placeholder="**********" name="password_confirmation">
                </div>
                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                    SIGN UP
                </button>

            </form>

            <!-- Text -->
            <p class="mb-0 font-size-sm text-center">
                Already have an account? <a class="text-underline" href="login.html">Log In</a>
            </p>
        </div>
    </div>
</div>
@endsection
