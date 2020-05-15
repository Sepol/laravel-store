<div class="container">

  <label for="published">Статус</label>
  <select class="form-control" name="published">
    @if (isset($product->id))
      <option value="0" @if ($product->published == 0) selected="" @endif>Не опубликовано</option>
      <option value="1" @if ($product->published == 1) selected="" @endif>Опубликовано</option>
    @else
      <option value="0">Не опубликовано</option>
      <option value="1">Опубликовано</option>
    @endif
  </select>

  <label for="title">Заголовок</label>
  <input type="text" class="form-control" name="title" placeholder="Заголовок новости"
         value="{{$product->title ?? ""}}"
         required autofocus>

  <label for="slug">Slug (Уникальное значение)</label>
  <input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация"
         value="{{$product->slug ?? ""}}" readonly="">

  <label for="categories[]">Родительская категория</label>
  <select class="form-control" name="categories[]" multiple="">
    @include('admin.product.categories', ['categories' => $categories])
  </select>

  <label for="description_short">Краткое описание</label>
  <textarea class="form-control" id="description_short"
            name="description_short">{{$product->description_short ?? ""}}</textarea>

  <label for="description">Полное описание</label>
  <textarea class="form-control" id="description" name="description">{{$product->description ?? ""}}</textarea>
         

  <label for="image">Изображение</label>
  <input type="file" name="image" value="{{ $product->image ?? "" }}">

  <hr/>

  <label for="meta_title">Мета заголовок</label>
  <input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок"
         value="{{$product->meta_title ?? ""}}">

  <label for="meta_description">Мета описание</label>
  <input type="text" class="form-control" name="meta_description" placeholder="Мета описание"
         value="{{$product->meta_description ?? ""}}">

  <label for="meta_keyword">Ключевые слова</label>
  <input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую"
         value="{{$product->meta_keyword ?? ""}}">

  <hr/>

  <input class="btn btn-primary" type="submit" value="Сохранить">
</div>