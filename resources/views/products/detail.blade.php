@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    
                    <p>店舗：test</p>
                    <p>郵便番号：test</p>
                    <p>住所：test</p>
                    <p>メール：test</p>
                    <p>生年月日：test</p>
                    <p>電話番号：test</p>
                    <p>クレーマーフラグ：test</p>
                    <p>更新日：test</p>
                    <p>登録日日：test</p>

                </div>
                <br/>
                <div class="card">
                    <form action="/list" method="POST">
                        @csrf
                        Log: <input type="text" name="log" value="{{old('log')}}">
                        <button type="submit" class="btn btn-sm btn-outline-primary">投稿</button>
                    </form>

                </div>
                <br/>
            </div>
        </div>
    </div>
@endsection