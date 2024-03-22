@extends('layouts.master')
@section('hero')
<h1>Shop</h1>
@endsection

@section('products')

@for ($i = 0; $i < 2; $i++)
<div class="col-12 col-md-4 col-lg-3">
    <div class="product-item" href="#">
        <img src="images/product-3.png" class="img-fluid product-thumbnail">
        <h3 class="product-title">Nordic Chair</h3>
        <strong class="product-price">$50.00</strong>
        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>
    </div>
</div> 

<div class="col-12 col-md-4 col-lg-3 ">
    <div class="product-item" href="#">
        <img src="images/product-1.png" class="img-fluid product-thumbnail">
        <h3 class="product-title">Nordic Chair</h3>
        <strong class="product-price">$50.00</strong>
        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>
    </div>
</div> 

<div class="col-12 col-md-4 col-lg-3 ">
    <div class="product-item" href="#">
        <img src="images/product-2.png" class="img-fluid product-thumbnail">
        <h3 class="product-title">Kruzo Aero Chair</h3>
        <strong class="product-price">$78.00</strong>
        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>
    </div>
</div> 

<div class="col-12 col-md-4 col-lg-3 ">
    <div class="product-item" href="#">
        <img src="images/product-3.png" class="img-fluid product-thumbnail">
        <h3 class="product-title">Geonomic Chair</h3>
        <strong class="product-price">$50.00</strong>
        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>
    </div>
</div> 
@endfor
@endsection
