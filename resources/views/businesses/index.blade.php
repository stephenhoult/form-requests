@extends('layouts.app')

@section('content')

    <a href="{{ route('businesses.create') }}"><button type="button" class="btn btn-info">Create business</button></a>

    <h1 class="mt-4">Businesses</h1>

    @if($businesses->count())
        <ul>
            @foreach ($businesses as $business)
                <li>
                    {{  $business->id }}: 
                    <a href="{{ route('businesses.show', ['business' => $business]) }}">
                        {{ $business->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        No businesses.
    @endif

@endsection