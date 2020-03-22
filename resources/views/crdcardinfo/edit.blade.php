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
                        <form method="POST" action="{{ url('/maintenance/crdcardinfo', $crdcardinfo->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('patch') }}
                            <div class="form-group">
                                <label for="cardnumber">カード番号</label>
                                <input class="form-control block-center" name="cardnumber" id="cardnumber" value="{{ old('cardnumber',$crdcardinfo->cardnumber) }}" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" maxlength="19"/>
                            </div>
                            <div class="form-group">
                                <label for="cardname">氏名</label>
                                <input type="text" class="form-control block-center" name="cardname" id="cardname" value="{{ old('cardname',$crdcardinfo->cardname) }}"/>
                            </div>
                            <div class="form-group">
                                <label for="card-expiration">有効期限(月)</label>
                                <select id="cardmonth" name="cardmonth">
                                    <option value="0">選択してください</option>
                                        @foreach(range(1, 12) as $cardmonth)
                                            <option value="{{ $cardmonth }}" {{ old('cardmonth',$crdcardinfo->cardmonth) == $cardmonth ? 'selected' : '' }}>{{ $cardmonth }}</option>
                                        @endforeach
                                </select>
                                <label for="cardmonth">月</label>
                            </div>
                            <div class="form-group">
                                <label for="card-expiration">有効期限(年)</label>
                                <select id="cardyear" name="cardyear">
                                    <option value="0">選択してください</option>
                                        @foreach(range(2020, 2030) as $cardyear)
                                            <option value="{{ $cardyear }}" {{ old('cardyear',$crdcardinfo->cardyear) == $cardyear ? 'selected' : '' }}>{{ $cardyear }}</option>
                                        @endforeach
                                </select>
                                <label for="cardyear">年</label>
                            </div>
                            <div class="text-right">
                                <button type="submit" id="card" class="btn btn-primary">編集</button>
                            </div>
                            <input id="id" name="id" type="hidden" value="{{ old('id',$crdcardinfo->id) }}">
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
