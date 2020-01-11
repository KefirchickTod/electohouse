@php
/** @var \App\Models\ShopCategory $item */
@endphp
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" id = "title" name="title" value="{{$item->title}}" class="form-control" minlength="3" required>
</div>
<div class="form-group">
    <label for="slug">Slug</label>
    <input id = "slug" name = "slug" type="text" class="form-control" value="{{$item->slug}}">
</div>
<div class="form-group">
    <label for="parent_id">Parent</label>
    <select id = "parent_id" name = "parent_id" class="form-control">
        @foreach($categoryList as $list)
            <option value="{{$list->id}}" @if($list->id == $item->parent_id) selected @endif>{{$list->title}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea id = "description" name = "description" type="text" class="form-control">{{$item->description}}</textarea>
</div>


