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
                        <form method="POST" action="{{ url('/maintenance/logininfo/store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="username">ユーザID</label>
                                <input type="text" class="form-control block-center" name="username" id="username" value="{{ old('username') }}"/>
                            </div>
                            <div class="form-group">
                                <label for="name">ユーザ名</label>
                                <input type="text" class="form-control block-center" name="name" id="name" value="{{ old('name') }}"/>
                            </div>
                            <div class="form-group">
                                <label for="password">パスワード</label>
                                <input type="text" class="form-control block-center" name="password" id="password" value="{{ old('password') }}"/>
                            </div>
                            <div class="text-right">
                                <button type="submit" id="card" class="btn btn-primary">登録</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
