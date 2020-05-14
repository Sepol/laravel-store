@extends('admin.layouts.app_admin')

@section('content')

    <form action="{{route('admin.product.update', $product)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}

        {{-- Form iclude --}}
        @include('admin.product.form')
        <input type="hidden" name="modified_by" value="{{Auth::id()}}">
    </form>

@endsection