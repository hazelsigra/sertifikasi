@extends('layout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 20px;">Add Member</h2>
    <form action="{{ route('members.store') }}" method="POST"
        style="max-width: 600px; margin: 0 auto; background: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">Name:</label>
            <input type="text" name="name" id="name" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="phone" style="display: block; font-weight: bold; margin-bottom: 5px;">Phone:</label>
            <input type="text" name="phone" id="phone" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="address" style="display: block; font-weight: bold; margin-bottom: 5px;">Address:</label>
            <textarea name="address" id="address" rows="4" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
        </div>

        <div style="text-align: center;">
            <button type="submit"
                style="background: #442222; color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer; font-size: 16px;">
                Submit
            </button>
        </div>
    </form>
@endsection
