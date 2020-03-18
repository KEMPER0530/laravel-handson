@extends('layouts.app')

@section('content')
    <div  class="container table-responsive">
        <table class="table table-striped condensed">
            <thead>
                <tr class="success">
                    <th>ID</th>
                    <th>更新日</th>
                    <th>変更内容</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($profile as $item)
                @if (($item->id) > 0 )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->lastdate }}</td>
                    <td>{{ $item->history }}</td>
                    <td><a class="btn btn-outline-primary btn-lg" href="{{ action('ProfileController@edit', $item) }}" role="button">編集</a></td>
                </tr>
                @endif
                @empty
                <tr>No posts yet</tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
