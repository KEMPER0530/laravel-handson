@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <nav class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $message)
                            <p>{{ $message }}</p>
                            @endforeach
                        </div>
                        @endif
                        <form method="POST" action="{{ url('/maintenance/work', $work->work_id) }}">
                            {{ csrf_field() }}
                            {{ method_field('patch') }}
                            <div class="form-group">
                                <label for="work_id">ID</label>
                                <input type="text" class="form-control block-center" name="work_id" id="work_id" value="{{ old('work_id',$work->work_id) }}" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="title">タイトル</label>
                                <input type="text" class="form-control block-center" name="title" id="title" value="{{ old('title',$work->title) }}" />
                            </div>
                            <div class="form-group">
                                <label for="comment">コメント</label>
                            <textarea class="form-control" name="comment" id="comment">{{ old('comment',$work->comment) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">URL</label>
                                <input type="text" class="form-control block-center" name="url" id="url" value="{{ old('url',$work->url) }}" />
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" id="ref" type="checkbox" name="ref"
                            value={{ old("ref",$work->ref) }} >
                                <label class="form-check-label" for="ref">リンク有無</label>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">編集</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
