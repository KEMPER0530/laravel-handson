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
                        <form method="POST" action="{{ url('/maintenance/profile/store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" class="form-control block-center" name="id" id="id" value="{{ $maxUserId }}" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="history">変更内容</label>
                                <textarea class="form-control" name="history" id="history">{{ old('history') }}</textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">登録</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
