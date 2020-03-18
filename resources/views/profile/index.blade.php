@extends('layouts.app')

@section('content')
    <div  class="container table-responsive">
        <table class="table table-striped condensed">
            <thead>
                <a class="btn btn-outline-success btn-lg float-right mb-3"
                href="{{ url('/maintenance/profile/create') }}" role="button">新規作成</a>
                <tr class="success">
                    <th>ID</th>
                    <th>更新日</th>
                    <th>変更内容</th>
                    <th></th>
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
                    <td><a class="btn btn-outline-primary btn-lg" href="{{ action('ProfileController@edit', $item) }}" role="button">編集</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-danger btn-lg del" href="#" role="button" data-id="{{ $item->id }}">削除</a>
                        <form method="post" action="{{ url('/maintenance/profile', $item->id) }}" id="form_{{ $item->id }}">
                           {{ csrf_field() }}
                           {{ method_field('delete') }}
                        </form>
                    </td>
                </tr>
                @endif
                @empty
                <tr>No posts yet</tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
