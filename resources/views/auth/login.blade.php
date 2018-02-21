@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row" style="padding-top: 100px;">
            <div class="col-lg-6 hidden-sm hidden-md hidden-xs" style="margin-top: 50px;">
                <p class="main-text-login text-center">{{config('app.name', 'Laravel')}}</p>
                <p class="sub-text-login text-center">Sistema de blog com Laravel e Vue.js</p>
            </div>

            <div class="col-lg-6">
                <div>
                    <h2 class="white-title text-center">Acesse o nosso sistema</h2>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" placeholder="E-mail" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="password" placeholder="Senha" type="password" class="form-control"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center" style="color: white;">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Permanecer logado
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Acessar
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <a class="btn btn-link" style="color: white" href="{{ route('password.request') }}">
                                Esqueceu sua senha?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
