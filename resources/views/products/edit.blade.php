@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('PRODUCT EDIT') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('products/update') }}">
 @csrf
<input type="hidden" value="{{ $products->id }}" name ='id'>
 <div class="form-group row">
 <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('products') }}</label>
 <div class="col-md-6">
 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $products->name}}" required autocomplete="name" autofocus>
 @error('name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="unit" class="col-md-4 col-form-label text-md-right">{{ __('unit') }}</label>
 <div class="col-md-6">
 <input id="unit" type="text" class="form-control @error('price') is-invalid @enderror" name="unit" value="{{ $products->unit }}" autocomplete="unit">
 @error('unit')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>
 <div class="col-md-6">
 <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $products->price }}" autocomplete="price">
 @error('price')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('quantity') }}</label>
 <div class="col-md-6">
 <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ $products->quantity }}" autocomplete="quantity">
 @error('quantity')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
     {{ __('Update') }}
    </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection