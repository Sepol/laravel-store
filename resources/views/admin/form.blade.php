<div class="container">

  <label for="">Заголовок</label>
  <input type="text" class="form-control" name="title" placeholder="Заголовок новости"
         value="{{$product->title ?? ""}}"
         required>

  <label for="">Slug (Уникальное значение)</label>
  <input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация"
         value="{{$product->slug ?? ""}}" readonly="">

  <label for="">Краткое описание</label>
  <textarea class="form-control" id="description_short"
            name="description_short">{{$product->description_short ?? ""}}</textarea>

  <label for="">Полное описание</label>
  <textarea class="form-control" id="description" name="description">{{$product->description ?? ""}}</textarea>
         
  <label for="">Изображение</label>
  <input type="file" multiple name="file[]" value="{{ $product->image ?? "" }}">

  <hr/>

  <label for="">Мета заголовок</label>
  <input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок"
         value="{{$product->meta_title ?? ""}}">

  <label for="">Мета описание</label>
  <input type="text" class="form-control" name="meta_description" placeholder="Мета описание"
         value="{{$product->meta_description ?? ""}}">

  <label for="">Ключевые слова</label>
  <input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую"
         value="{{$product->meta_keyword ?? ""}}">

  <hr/>

  <input class="btn btn-primary" type="submit" value="Сохранить">
</div>