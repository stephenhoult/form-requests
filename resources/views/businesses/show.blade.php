@extends('layouts.app')

@section('content')

<a href="{{ route('businesses.index') }}">
    &lt; back to list
</a>

<h1 class="mt-4">{{ $business->name }}</h1>

<table class="table my-4">
    <thead>
        <tr>
            <th scope="col">Type</th>
            <th scope="col">Instagram</th>
            <th scope="col">Heard about?</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $business->type }}</td>
            <td>{{ $business->instagram_username }}</td>
            <td>{{ $business->where_did_you_hear_about_us }}</td>
        </tr>
    </tbody>
</table>

<p>
    {{ $business->name }} {{ is_null($business->discount_code) ? 
        'did not use a discount code' : 
        sprintf('used discount code %s', $business->discount_code)
    }}.
</p>

@endsection