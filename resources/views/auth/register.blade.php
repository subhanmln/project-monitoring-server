@extends('auth.layout')

@section('content')
<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-md-12 mb-3">

                    <h2>Sign Up</h2>
                    <p>Enter your email and password to register</p>

                </div>
                <form action="{{route('register_store')}}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control add-billing-address-input" value="{{ old('name') }}" name="name">
                        </div>
                        <!-- error message  -->
                        @error('name')
                        <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                            <strong>Error!</strong>  {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <!-- error message  -->
                        @error('email')
                        <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                            <strong>Error!</strong>  {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <!-- error message  -->
                        @error('password')
                        <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                            <strong>Error!</strong>  {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-12" hidden>
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <input type="text" class="form-control" name="role" value="admin">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-3">
                            <div class="form-check form-check-primary form-check-inline">
                                <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                <label class="form-check-label" for="form-check-default">
                                    I agree the <a href="javascript:void(0);" class="text-primary">Terms and Conditions</a>
                                </label>
                          </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-4">
                            <button class="btn btn-secondary w-100">SIGN UP</button>
                        </div>
                    </div>
                </form>

                <div class="col-12">
                    <div class="text-center">
                        <p class="mb-0">Already have an account ? <a href="/login" class="text-warning">Sign in</a></p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection