@extends('layouts.app')

@section('content')
    <div class="mx-auto w-25">
        <form action="/list" method="GET">
        @csrf
            <input class="m-1"type="text" name="keyword" placeholder="商品名を入力">
            <select class="form-select m-1" aria-label="Default select example">
                <option disabled style='display:none;' @if (empty($post->company_name)) selected @endif>選択してください</option>
                @foreach($company_name as $company_names)
                <option value="{{ $company_names->id }}" @if (isset($post->company_name) && ($post->company_name === $company_names->id)) selected @endif>{{ $company_names->name }}</option>
                @endforeach
            </select>
            <input class="m-1"type="submit" value="検索">
        </form>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">商品一覧</div>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: lightgray">
                            <td>ID</td>
                            <td>商品画像</td>
                            <td>商品名</td>
                            <td>価格</td>
                            <td>在庫数</td>
                            <td>メーカー名</td>
                            <td>　</td>
                            <td>　</td>
                        </tr>
                        </thead>
                        @foreach ($products as $product) 
                            <tr>
                                <td>{{ $product->company_id }}</td> {{-- 各要素を表示 --}}
                                <td>{{ $product->img_path}}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->company_name }}</td>
                                <td><button type="button" class="btn btn-primary">詳細表示</button></td>
                                <td><button type="button" class="btn btn-primary">削除</button></td>
                            </tr>
                        @endforeach
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