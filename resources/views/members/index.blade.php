@extends('layout')

@section('content')
    <h2 style="text-align: center">Members</h2>
    <a href="{{ route('members.create') }}"
        style="background: #442222; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; display: inline-block; margin-bottom: 15px;">Add
        Member</a>
    <table border="1" cellspacing="0" cellpadding="10" style="width: 100%; margin-top: 10px; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f4f4f4;">
                <th style="padding: 10px;">Name</th>
                <th style="padding: 10px;">Phone</th>
                <th style="padding: 10px;">Address</th>
                <th style="padding: 10px; text-align: center;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td style="padding: 10px;">{{ $member->name }}</td>
                    <td style="padding: 10px;">{{ $member->phone }}</td>
                    <td style="padding: 10px;">{{ $member->address }}</td>
                    <td style="padding: 10px; text-align: center;">
                        <a href="{{ route('members.edit', $member->id) }}"
                            style="background: #007bff; color: white; padding: 8px 12px; text-decoration: none; border-radius: 5px;">Edit</a>

                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                style="background: #dc3545; color: white; padding: 8px 12px; border: none; border-radius: 5px; cursor: pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
