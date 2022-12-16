@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
    </head>
<body>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <img src="{{asset('pfp.jpg')}}" alt="Avatar" class="avatar">
        <div class="input-container">
        <input class="input" type="text" name="email" value="{{ old('email') }}" placeholder="email">
        </div>
        @error('email')
            <span class="error-msg">{{ $message }}</span>
        @enderror

        <div class="input-container">
        <input class="input" type="password" name="password" placeholder="password">
        </div>
        @error('password')
            <span class="error-msg">{{ $message }}</span>
        @enderror
        <button type="submit">Login</button>
        <a href="http://iti_summer.test/password/reset"> forgot password?</a>
    </form>
    
</body>
</html>
@endsection