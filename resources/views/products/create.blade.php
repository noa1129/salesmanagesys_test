@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">顧客新規登録</div>
                    <form action="/list" method="POST">
                        @csrf
                        <p>商品名：<input type="text" name="name" value="{{ old('name') }}"></p>
                        <p>メーカー：<input type="text" name="shop_id" value="{{ old('shop') }}"></p>
                        <p>価格：<input type="text" name="postal" value="{{ old('postal') }}"></p>
                        <p>在庫数：<input type="text" name="address" value="{{ old('address') }}"></p>
                        <p>コメント：<input type="text" name="email" value="{{ old('email') }}"></p>
                        <p>商品画像：<input type="text" name="birthdate" value="{{ old('birthdate') }}"></p>
                        <p style="text-align: center"><button class="btn btn-primary" type="submit">　　登　録　　</button></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection