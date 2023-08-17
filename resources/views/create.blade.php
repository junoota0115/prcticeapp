@extends('layouts.app')

@section('title', '投稿画面')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Post Form</h1>
            <form action="#" method="post">
                @csrf

                <div class="form-group">
                    <label for="">会社</label>
                    <input type="text" class="form-control" id="company_id" name="company_id" placeholder="Company">
                </div>

                <div class="form-group">
                    <label for="url">商品名</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product">
                </div>
                <div class="form-group">
                    <label for="url">金額</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="url">在庫</label>
                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock">
                </div>
                
                <div class="form-group">
                    <label for="comment">コメント</label>
                    <textarea class="form-control" id="comment" name="comment" placeholder="Comment"></textarea>
                </div>
<br>
                <div class="form-group">
                    <input type="file"  id="img_path" name="img_path" >
                </div>

                <button type="submit" class="btn btn-primary">送信</button>
            </form>
        </div>
    </div>
@endsection

{{-- $table->bigIncrements('id');
$table->integer('company_id');
$table->string('product_name');
$table->integer('price');
$table->integer('stock');
$table->text('comment')->nullable();
$table->string('img_path')->nullable();
$table->timestamps(); --}}