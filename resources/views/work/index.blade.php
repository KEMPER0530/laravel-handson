@extends('layouts.app')

@section('content')
    <div  class="container table-responsive">
        <table class="table table-bordered condensed table-hover">
            <thead class="bg-success">
                <tr class="success">
                    <th>ID</th>
                    <th>タイトル</th>
                    <th>コメント</th>
                    <th>URL</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($work as $item)
                <tr>
                    <td>{{ $item->work_id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->comment }}</td>
                    <td>{{ $item->url }}</td>
                </tr>
                @empty
                <tr>No posts yet</tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
