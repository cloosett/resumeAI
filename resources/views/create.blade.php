@extends('layouts.layout')

@section('content')
    <create-resume :is-authenticated="{{ auth()->check() ? 'true' : 'false' }}"></create-resume>
@endsection
