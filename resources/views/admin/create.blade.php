@extends('admin.layouts.app_admin')

@section('content')

    <form action="{{route('admin::store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        {{-- Form iclude --}}
        @include('admin.form')
        <input type="hidden" name="created_by" value="{{Auth::id()}}">
    </form>

@endsection