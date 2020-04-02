@extends('layouts.app')

@section('title')
    Loading {{ config('app.branding', '') }} {{ config('app.name', 'Laravel') }}...
@endsection

@section('content')
    <App></App>
@endsection
