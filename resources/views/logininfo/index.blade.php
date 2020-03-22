@extends('layouts.app')

@section('content')
    <div  class="container table-responsive">
        <table class="table table-striped condensed">
            <thead>
                <a class="btn btn-outline-success btn-lg float-right mb-3"
                href="{{ url('/maintenance/logininfo/create') }}" role="button">新規作成</a>
                <tr class="success">
                    <th>ユーザID</th>
                    <th>ユーザ名</th>
                    <th>更新日</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($logininfo as $item)
                <tr>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->updated_at }}</td>
                    @if (($item->id) > 3 )
                    <td><a class="btn btn-outline-primary btn-lg" href="{{ action('LogininfoController@edit', $item) }}" role="button">編集</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-danger btn-lg del" href="#" role="button" data-id="{{ $item->id }}">削除</a>
                        <form method="post" action="{{ url('/maintenance/logininfo', $item->id) }}" id="form_{{ $item->id }}">
                           {{ csrf_field() }}
                           {{ method_field('delete') }}
                        </form>
                    </td>
                    @else
                    <td></td>
                    <td></td>
                    @endif
                </tr>
                @empty
                <tr>No Logininfo yet</tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
