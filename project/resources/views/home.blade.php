@extends('layouts.main')

@section('homecontent')

    @include('require.banner')

    {{-- @can('isAdmin') --}}
        @include('require.compter')
    {{-- @endcan --}}

@endsection
