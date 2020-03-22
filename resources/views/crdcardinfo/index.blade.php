@extends('layouts.app')

@section('content')
    <div  class="container table-responsive">
        <table class="table table-striped condensed">
            <thead>
                <a class="btn btn-outline-success btn-lg float-right mb-3"
                href="{{ url('/maintenance/crdcardinfo/create') }}" role="button">新規作成</a>
                <tr class="success">
                    <th>カード番号</th>
                    <th>氏名</th>
                    <th>有効期限(月/年)</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($crdcardinfo as $item)
                @if (($item->id) > 0 )
                <tr>
                    <td>{{ $item->cardnumber }}</td>
                    <td>{{ $item->cardname }}</td>
                    <td>{{ $item->cardmonth }}/{{ $item->cardyear }}</td>
                    <td><a class="btn btn-outline-primary btn-lg" href="{{ action('CrdcardinfoController@edit', $item) }}" role="button">編集</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-danger btn-lg del" href="#" role="button" data-id="{{ $item->id }}">削除</a>
                        <form method="post" action="{{ url('/maintenance/crdcardinfo', $item->id) }}" id="form_{{ $item->id }}">
                           {{ csrf_field() }}
                           {{ method_field('delete') }}
                        </form>
                    </td>
                </tr>
                @endif
                @empty
                <tr>No CardInfo yet</tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
