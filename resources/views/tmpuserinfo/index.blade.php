@extends('layouts.app')

@section('content')
    <div  class="container table-responsive">
        <table class="table table-striped condensed">
            <thead>
                <tr class="success">
                    <th>ユーザID</th>
                    <th>ユーザ名</th>
                    <th>トークン</th>
                    <th>有効期限</th>
                    <th>更新日</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tmpuserinfo as $item)
                <tr>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->token }}</td>
                    <td>{{ $item->expired }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a class="btn btn-outline-danger btn-lg del" href="#" role="button" data-id="{{ $item->id }}">削除</a>
                        <form method="post" action="{{ url('/maintenance/tmpuserinfo', $item->id) }}" id="form_{{ $item->id }}">
                           {{ csrf_field() }}
                           {{ method_field('delete') }}
                        </form>
                    </td>
                </tr>
                @empty
                <tr>No Tmpuserinfo yet</tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
