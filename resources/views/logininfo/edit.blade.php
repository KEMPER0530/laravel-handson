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
                        <form method="POST" action="{{ url('/maintenance/logininfo',$logininfo->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('patch') }}
                            <div class="form-group">
                                <label for="username">ユーザID</label>
                                <input type="text" class="form-control block-center" name="username" id="username" value="{{ old('username',$logininfo->username) }}"/>
                            </div>
                            <div class="form-group">
                                <label for="name">ユーザ名</label>
                                <input type="text" class="form-control block-center" name="name" id="name" value="{{ old('name',$logininfo->name) }}"/>
                            </div>
                            {{-- <div class="form-group">
                                <label for="password">編集時はパスワードを再設定ください</label>
                                <input type="text" class="form-control block-center" name="password" id="password" value="{{ old('password') }}" />
                            </div>--}}
                            <div class="text-right">
                                <button type="submit" id="card" class="btn btn-primary">編集</button>
                            </div>
                            <input id="id" name="id" type="hidden" value="{{ old('id',$logininfo->id) }}">
                            {{-- <input id="password" name="password" type="hidden" value="{{ old('password',$logininfo->password) }}"> --}}
                        </form>
                    </div>
                    {{-- <div class="panel-body">
                        <ul>
                        @forelse ($logininfo -> logininfo_comments as $comment)
                            <li>{{ $comment->body }}</li>
                            @empty
                            <li>No comments yet</li>
                        @endforelse
                        </ul>
                        <form method="post" action="{{ action('Logininfo_commentsController@store', $logininfo) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="comment">コメント</label>
                                <input type="text" name="body" class="form-control block-center" placeholder="enter comment" value="{{ old('body') }}">
                                @if ($errors->has('body'))
                                    <span class="error">{{ $errors->first('body') }}</span>
                                @endif
                            </div>
                            <div class="text-right">
                                <button type="submit" id="comment" class="btn btn-primary">コメント登録</button>
                            </div>
                        </form>
                    </div> --}}
                </nav>
            </div>
        </div>
    </div>
@endsection
