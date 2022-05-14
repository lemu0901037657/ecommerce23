@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Products Detail') }}
 </div>
 <div class="card-body">
 id : {{ $products->id }}
 <br>
 Products : {{ $products->name }}
 <br>
 unit : {{ $products->unit }}
 <br>
 price : {{ $products->price }}
 <br>
 quantity : {{ $products->quantity }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('products/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection