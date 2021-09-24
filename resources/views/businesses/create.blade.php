@extends('layouts.app')

@section('content')
    <form action="{{ route('businesses.store') }}" method="post">
        @csrf()

        <div class="form-group">
            <label for="name">Business Name *</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter business name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="type">Business type *</label>
            <select class="form-control" id="type" name="type">
                <option>Select option</option>
                <option value="salon" {{ old('type') == 'salon' ? 'selected' : '' }}>Salon</option>
                <option value="freelance" {{ old('type') == 'freelance' ? 'selected' : '' }}>Freelance</option>
                <option value="home" {{ old('type') == 'home' ? 'selected' : '' }}>Home</option>
                <option value="venue" {{ old('type') == 'venue' ? 'selected' : '' }}>Venue</option>
            </select>
        </div>

        <div class="form-group">
            <label for="instagram_username">Instagram username</label>
            <input type="text" class="form-control" id="instagram_username" name="instagram_username" placeholder="Enter instagram username" value="{{ old('instagram_username') }}">
        </div>
        
        <div class="form-group">
            <label for="discount_code">Discount code</label>
            <input type="text" class="form-control" id="discount_code" name="discount_code" placeholder="Discount code" value="{{ old('discount_code') }}">
        </div>

        <div class="form-group">
            <label for="type">Where did you hear about us? *</label>
            <select class="form-control" id="where_did_you_hear_about_us" name="where_did_you_hear_about_us" value="{{ old('where_did_you_hear_about_us') }}">
                <option>Select option</option>
                <option value="facebook" {{ old('where_did_you_hear_about_us') == 'facebook' ? 'selected' : '' }}>Facebook</option>
                <option value="instagram" {{ old('where_did_you_hear_about_us') == 'instagram' ? 'selected' : '' }}>Instagram</option>
                <option value="internet search" {{ old('where_did_you_hear_about_us') == 'internet search' ? 'selected' : '' }}>Internet search</option>
                <option value="tiktok" {{ old('where_did_you_hear_about_us') == 'tiktok' ? 'selected' : '' }}>TikTok</option>
                <option value="word of mouth" {{ old('where_did_you_hear_about_us') == 'word of mouth' ? 'selected' : '' }}>Word of mouth</option>
                <option value="other" {{ old('where_did_you_hear_about_us') == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('businesses.index') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
    </form>
@endsection
