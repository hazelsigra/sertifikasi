@extends('layout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 20px;">Relations</h2>

    <h3 style="margin-top: 30px;">Books by Category</h3>
    <ul style="list-style-type: none; padding: 0;">
        @foreach ($categories as $category)
            <li style="margin-bottom: 15px;">
                <strong>{{ $category->name }}:</strong>
                @if ($category->books->isEmpty())
                    <span>No books available.</span>
                @else
                    <ul style="padding-left: 20px;">
                        @foreach ($category->books as $book)
                            <li>{{ $book->title }} by {{ $book->author }}</li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>

    <h3 style="margin-top: 30px;">Books by Member</h3>
    <ul style="list-style-type: none; padding: 0;">
        @foreach ($members as $member)
            <li style="margin-bottom: 15px;">
                <strong>{{ $member->name }}:</strong>
                @if ($member->borrowedBooks->isEmpty())
                    <span>No books borrowed.</span>
                @else
                    <ul style="padding-left: 20px;">
                        @foreach ($member->borrowedBooks as $book)
                            <li>{{ $book->title }} by {{ $book->author }}</li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
