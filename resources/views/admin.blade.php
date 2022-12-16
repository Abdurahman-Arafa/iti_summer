@extends('layouts.app')

@section('content')
<h2>This is a protected route, only available for users with name = admin</h2>

<?php

use Illuminate\Support\Facades\Auth;

dd(Auth::user())
?>
@endsection