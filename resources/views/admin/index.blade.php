@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-left">Наименование</th>
                    <th scope="col">Краткое описание</th>
                    <th scope="col" class="text-right">Действие</th>
                </thead>
                <tbody>

                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description_short }}</td>
                        <td class="text-right">

                            <form onsubmit="if(confirm('Удалить?')) {return true} else {return false}"
                                  action="{{route('admin::destroy', $product)}}" method="post">

                                <input type="hidden" name="_method" value="DELETE">
                                {{csrf_field()}}

                                <a class="btn btn-default" href="{{route('admin::edit', $product)}}"><i
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
            </table>
        </div>

        <div class="container">
            <table class="table">
                <tfoot>
                <td colspan="3">
                    <ul class="float-right">
                        {{$products->links()}}
                    </ul>
                </td>
                </tfoot>
            </table>
    </div>

@endsection