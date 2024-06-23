@extends('layouts.elitvid.admin.login&registration')

@section('login&registration')

    <div class="container">

        <form action="{{route('save')}}" method="POST" class="form-signin">
            <div class="panel periodic-login">
                <span class="atomic-number">28</span>
                @csrf
                <div class="panel-body text-center">
                    <h1 class="atomic-symbol">EV</h1>
                    <p class="atomic-mass">14.072110</p>
                    <p class="element-name">Elitvid</p>

                    <i class="icons icon-arrow-down"></i>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="username" class="form-text" required>
                        <span class="bar"></span>
                        <label>Username</label>
                    </div>
                    @error('username')
                    {{$message}}
                    @enderror
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="email" class="form-text" required>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                    @error('email')
                    {{$message}}
                    @enderror
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" name="password" class="form-text" required>
                        <span class="bar"></span>
                        <label>Password</label>
                    </div>
                    @error('password')
                    {{$message}}
                    @enderror
                    <label class="pull-left">
                        <div class="icheckbox_flat-aero" style="position: relative;"><input type="checkbox" class="icheck pull-left" name="checkbox1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Agree the terms and policy
                    </label>
{{--                    <button >--}}
{{--                        Создать--}}
                        <input type="submit" class="btn col-md-12" value="SignUp">
{{--                    </button>--}}
                </div>
                <div class="text-center" style="padding:5px;">
                    <a href="{{route('login')}}">Already have an account?</a>
                </div>
            </div>
        </form>

    </div>

@endsection
