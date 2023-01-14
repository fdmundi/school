@extends('layouts.auth')


@section('content')

    <div class="clearfix " style="margin: auto;"></div>
    <div class="page-content login-cover" style="position: relative; margin-top: 100px;">
        <!-- Main content -->
        <div class="content-wrapper">
            <div class="container mb-3" style="max-width: 400px; text-align: center; ">

                <a href="{{url('/')}}">
                    <img src="{{asset('assets2/img/logo-400.png')}}" style="max-width: 100px;" alt="">

                </a>


            </div>
            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center"
                 style="margin-left: 20px; margin-right: 20px;">
                <!-- Login card -->
                <form class="login-form " method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="card mb-0">
                        <div class="card-body">


                            <div class="text-center mb-5">
                                <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round  mb-3"></i>
                                <a href="{{url('/')}}" style="display: inline; float: left">
                                    <span><i class="fa fa-home"></i></span>
                                </a>
                                <h5 class="mb-3">Login</h5>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger alert-styled-left alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span>
                                    </button>
                                    <span
                                        class="font-weight-semibold">Oops!</span> {{ implode('<br>', $errors->all()) }}
                                </div>
                            @endif


                            <div class="form-group ">
                                <input type="text" class="form-control" name="identity" value="{{ old('identity') }}"
                                       placeholder="Login ID or Email">
                            </div>

                            <div class="form-group ">
                                <input required name="password" type="password" class="form-control"
                                       placeholder="{{ __('Password') }}">

                            </div>

                            <div class="form-group d-flex align-items-center">
                                <div class="form-check mb-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-input-styled"
                                               {{ old('remember') ? 'checked' : '' }} data-fouc>
                                        Remember
                                    </label>
                                </div>

                                <a href="{{ route('password.request') }}" class="ml-auto">Forgot password?</a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sign in <i
                                        class="icon-circle-right2 ml-2"></i></button>
                            </div>

                            {{-- <div class="form-group">
                                 <a href="#" class="btn btn-light btn-block"><i class="icon-home"></i> Back to Home</a>
                             </div>--}}


                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>
@endsection
