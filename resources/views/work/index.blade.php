@extends('layouts.app')

@section('content')
    <div  class="container table-responsive">
        <table class="table table-striped condensed">
            <thead>
                <a class="btn btn-outline-success btn-lg float-right mb-3"
                href="{{ url('/maintenance/work/create') }}" role="button">新規作成</a>
                <tr class="success">
                    <th>ID</th>
                    <th>タイトル</th>
                    <th>コメント</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($work as $item)
                @if (($item->work_id) > 0 )
                <tr>
                    <td>{{ $item->work_id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->comment }}</td>
                    <td><a class="btn btn-outline-primary btn-lg" href="{{ action('WorkController@edit', $item) }}" role="button">編集</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-danger btn-lg del" href="#" role="button" data-id="{{ $item->work_id }}">削除</a>
                        <form method="post" action="{{ url('/maintenance/work', $item->work_id) }}" id="form_{{ $item->work_id }}">
                           {{ csrf_field() }}
                           {{ method_field('delete') }}
                        </form>
                    </td>
                </tr>
                @endif
                @empty
                <tr>No Work yet</tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
