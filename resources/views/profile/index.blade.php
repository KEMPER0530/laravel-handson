@extends('layouts.app')

@section('content')
    <div  class="container table-responsive">
        <table class="table table-bordered condensed table-hover">
            <thead>
                <tr class="success">
                    <th>ＩＤ</th>
                    <th>更新日</th>
                    <th>変更内容</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($profile as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->lastdate }}</td>
                    <td>{{ $item->history }}</td>
                </tr>
                @empty
                <tr>No posts yet</tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
