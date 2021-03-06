@extends('admin.layouts.app_admin')

@section('content')

<h2 class="text-center">Добро пожаловать в панель администратора!</h2>

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Категорий {{$count_categories}}</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Товаров {{$count_products}}</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Посетителей 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Сегодня 0</span></p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Создать категорию</a>
      @foreach ($categories as $category)
        <a class="list-group-item" href="{{route('admin.category.edit', $category)}}">
          <h4 class="list-group-item-heading">{{$category->title}}</h4>
          <p class="list-group-item-text">
            {{$category->products()->count()}}
          </p>
        </a>
      @endforeach
    </div>
    <div class="col-sm-6">
      <a class="btn btn-block btn-default" href="{{route('admin.product.create')}}">Создать товар</a>
      @foreach ($products as $product)
        <a class="list-group-item" href="{{route('admin.product.edit', $product)}}">
          <h4 class="list-group-item-heading">{{$product->title}}</h4>
          <p class="list-group-item-text">
            {{$product->categories()->pluck('title')->implode(', ')}}
          </p>
        </a>
      @endforeach
    </div>
  </div>
</div>

@endsection