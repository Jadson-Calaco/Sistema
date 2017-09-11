@extends('admin.templates.templateLogin')

@section('conteudo-form')

<form class="login-form" role="form" method="POST" action="{{url('/login') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <input id="email" type="email" placeholder="E-mail"class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input id="password" type="password" placeholder="Senha" class="form-control" name="password" required>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Entrar
            </button>

            <p>
                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Esqueci minha senha?
                </a>
            </p>
            <p class="message">Não possui Conta? <a href="#">Criar Conta</a></p>
        </div>
    </div>
</form>

<form class="register-form" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

        <div class="col-md-12">
            <input id="name" type="text" placeholder="Nome" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <div class="col-md-12">
            <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <input id="password" type="password" placeholder="Senha" class="form-control" name="password" required>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <input id="password-confirm" type="password" placeholder="Confirme sua Senha" class="form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
        <p class="message">Já Registrado? <a href="#">Sign In</a></p>
    </div>
</form>

@endsection