@extends('layouts.app')

@section('content')
    <h2>Chi tiết sản phẩm</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text"><strong>Giá:</strong> {{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
            <p class="card-text"><strong>Mô tả:</strong> {{ $product->description }}</p>
        </div>
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Quay lại</a>
@endsection
