@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">商品一覧
</div>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: lightgray">
                            <td>ID</td>
                            <td>商品画像</td>
                            <td>商品名</td>
                            <td>価格</td>
                            <td>在庫数</td>
                            <td>メーカー名</td>
                            <td>商品名</td>
                            <td>　</td>
                            <td>　</td>
                        </tr>
                        </thead>
                            <tr>
                                <td>test</td> {{-- 各要素を表示 --}}
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td><button type="button" class="btn btn-primary">詳細表示</button></td>
                                <td><button type="button" class="btn btn-primary">削除</button></td>
                            </tr>
                    </table>
                    </table>
                    <table width="100%">
                        <tr>
                            <td width="120px"><a href="{{ route('create') }}">新規登録</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection