@extends('layout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 20px;">Edit Book</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST"
        style="max-width: 600px; margin: 0 auto; background: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label for="title" style="display: block; font-weight: bold; margin-bottom: 5px;">Title:</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="author" style="display: block; font-weight: bold; margin-bottom: 5px;">Author:</label>
            <input type="text" name="author" id="author" value="{{ $book->author }}" required
                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Categories:</label>
            @foreach ($categories as $category)
                <div style="margin-bottom: 10px;">
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}" id="category_{{ $category->id }}"
                        {{ in_array($category->id, $book->categories->pluck('id')->toArray()) ? 'checked' : '' }}>
                    <label for="category_{{ $category->id }}">{{ $category->name }}</label>
                </div>
            @endforeach
        </div>

        <div style="text-align: center;">
            <button type="submit"
                style="background: #007bff; color: white; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer; font-size: 16px;">
                Update
            </button>
        </div>
    </form>
@endsection