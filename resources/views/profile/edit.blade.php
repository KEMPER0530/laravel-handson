@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">プロフィールを編集する</div>
                    <div class="panel-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $message)
                            <p>{{ $message }}</p>
                            @endforeach
                        </div>
                        @endif
                        <form method="POST" action="{{ action('ProfileController@update', $profile) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="profile_id">ID</label>
                                <input type="text" class="form-control" name="profile_id" id="profile_id" value="{{ old('profile_id') }}" />
                            </div>
                            <div class="form-group">
                                <label for="lastdate">更新日</label>
                                <input type="text" class="form-control" name="lastdate" id="lastdate" value="{{ old('lastdate') }}" />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">送信</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection