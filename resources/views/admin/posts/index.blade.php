@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
    
                <tr>
                    <td>
                        {{ $post['id'] }}
                    </td>
                    <td>
                        {{ $post['author'] }}
                    </td>
                    <td>
                        {{ $post['title'] }}
                    </td>
                    <td>
                        {{ $post['post_date'] }}
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post['id']) }}" class="btn btn-success">VIEW</a>
                    </td>
                </tr>
    
            @empty
    
                <tr>
                    <td colspan="5">Empty</td>
                </tr>
    
            @endforelse
        </tbody>
    </table>
</div>

@endsection