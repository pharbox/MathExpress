@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 text-center">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group d-flex align-items-center m-2">
                        <i class="fa fa-user"></i>
                        <input id="email" placeholder="Email" type="email" style="border: 0; box-shadow: none"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required autofocus>
                    </div>
                    <hr class="m-0">
                    <div class="input-group d-flex align-items-center m-2">
                        <i class="fa fa-lock"></i>
                        <input id="password" placeholder="Password" type="password" style="border: 0; box-shadow: none"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required>
                    </div>
                    <hr class="m-0">
                </form>
                <div class="my-4">
                    <a href="#" style="color: #1d2124">Паролро фаромуш кардед?</a>
                </div>
                <button type="submit" class="btn btn-success my-4 w-75" style="border-radius: 20px">
                    {{ __('Логин  ') }}<i class="fa fa-angle-right"></i>
                </button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">


                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ __('Даромад') }}</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Парол') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Ба ёд гиред') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Логин') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Паролро фаромуш кардед?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
