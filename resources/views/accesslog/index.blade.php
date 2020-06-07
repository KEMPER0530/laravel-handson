@extends('layouts.app')

@section('content')
    <div  class="container table-responsive">
        <table class="table table-striped condensed">
            <thead>
                <tr class="success">
                    <th>ユーザID</th>
                    <th>イベント名</th>
                    <th>IPアドレス</th>
                    <th>国</th>
                    <th>都市</th>
                    <th>緯度</th>
                    <th>経度</th>
                    <th>アクセス日</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($accesslog as $item)
                <tr>
                    <td>{{ $item->user_id }}</td>
                    <td>{{ $item->event_id }}</td>
                    <td>{{ $item->access_ip }}</td>
                    <td>{{ $item->country_code }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->latitude }}</td>
                    <td>{{ $item->longitude }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a class="btn btn-outline-danger btn-lg del" href="#" role="button" data-id="{{ $item->id }}">削除</a>
                        <form method="post" action="{{ url('/maintenance/accesslog', $item->id) }}" id="form_{{ $item->id }}">
                           {{ csrf_field() }}
                           {{ method_field('delete') }}
                        </form>
                    </td>
                </tr>
                @empty
                <tr>No accesslog yet</tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
