@extends('layouts.app')

@section('content')

<div class="nav">
    <ul class="links">
      <li class="signin-active"><a class="btn">{{ __('Вход') }} </a></li>
      <li class="signup-inactive"><a class="btn">{{ __('Регистрация') }} </a></li>
    </ul>
  </div>
  <div ng-app ng-init="checked = false">

    {{-- Login form --}}
    <form class="form-signin" action="{{ route('login') }}" method="POST" name="form">
      @csrf
      <label for="email">{{ __('E-Mail') }}</label>
      <input id="email" type="text" class="form-styling{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" value="{{ old('email') }}" required autofocus />

        @if ($errors->has('email'))
            <div>
                <strong>{{ $errors->first('email') }}</strong>
            </div>
        @endif
    
      <label for="password">{{ __('Пароль') }}</label>
      <input id="password" type="password"  class="form-styling{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />

        @if ($errors->has('password'))
            <div >
                <strong>{{ $errors->first('password') }}</strong>
            </div>
        @endif
      
      <button class="btn-animate btn-signin" type="submit">{{ __('Войти') }}</button>
    </form>
    {{-- End login form --}}

    {{-- Register form --}}
    <form class="form-signup" action="{{ route('register') }}" method="post" name="form">
      @csrf
      <label for="name">{{ __('Имя') }}</label>
      <input id="name" type="text" class="form-styling{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="" required autofocus/>

      @if ($errors->has('name'))
          <div>
              <strong>{{ $errors->first('name') }}</strong>
          </div>
      @endif

      <label for="email">{{ __('Email') }}</label>
      <input id="email" type="email" class="form-styling{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="" required/>

        @if ($errors->has('email'))
            <div>
                <strong>{{ $errors->first('email') }}</strong>
            </div>
        @endif

      <label for="password">{{ __('Пароль') }}</label>
      <input id="password" type="password" class="form-styling{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="" required/>

        @if ($errors->has('password'))
            <div>
                <strong>{{ $errors->first('password') }}</strong>
            </div>
        @endif

      <label for="password-confirm">{{ __('Повторите пароль') }}</label>
      <input id="password-confirm" type="password" class="form-styling" name="password_confirmation" 
      placeholder="" required>

        <button type="submit" class="btn-signup">{{ __('Зарегистрироваться') }}</button>
    </form>
    {{-- End register form --}}
  </div>


@endsection
