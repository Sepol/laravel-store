@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
        @slot('title') Список товаров @endslot
        @slot('parent') Главная @endslot
        @slot('active') Товары @endslot
      @endcomponent

            <table class="table table-striped">
                <thead>
                    <th>Наименование</th>
                    <th>Краткое описание</th>
                    <th class="text-right">Действие</th>
                </thead>
                <tbody>

                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description_short }}</td>
                        <td class="text-right">

                            <form onsubmit="if(confirm('Удалить?')) {return true} else {return false}"
                                  action="{{route('admin.product.destroy', $product)}}" method="post">

                                <input type="hidden" name="_method" value="DELETE">
                                {{csrf_field()}}

                                <a class="btn btn-default" href="{{route('admin.product.edit', $product)}}"><i
                                        class="fa fa-edit"></i></a>

                                <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                    </tr>
                @endforelse
                </tbody>
        
                <tfoot>
                    <tr>
                <td colspan="3">
                    <ul class="float-right">
                        {{$products->links()}}
                    </ul>
                </td>
            </tr>
                </tfoot>
            </table>
            <a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать товар</a>
        </div>

@endsection