@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="{{asset('css/register.css')}}">
    </head>
<body>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="input-container">
        <input class="input" type="text" name="name" value="{{ old('name') }}" required placeholder="name">
        </div>
        @error('name')
            <span class="error-msg">{{ $message }}</span>
        @enderror

        <div class="input-container">
        <input class="input" type="text" name="email" value="{{ old('email') }}" required placeholder="email">
        </div>
        @error('email')
            <span class="error-msg">{{ $message }}</span>
        @enderror

        <div class="input-container">
        <input class="input" type="password" name="password" required placeholder="password">
        </div>
        @error('password')
            <span class="error-msg">{{ $message }}</span>
        @enderror

        <div class="input-container">
        <input class="input" type="password" name="password_confirmation" required placeholder="confirm password">
        </div>

        <button type="submit">Register</button>
    </form>
    
</body>
</html>
@endsection