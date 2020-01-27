@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('shop.admin.lists.store')}}" enctype="multipart/form-data">

        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Product</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create product</h3>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id = "title" name="title"  class="form-control" minlength="3" required>
                            </div>
                            <div class="form-group">
                                <label for="manufacture">Manufacture</label>
                                <input type="text" id = "manufacture" name="manufacture"  class="form-control" minlength="3" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" id = "price" name="price"  class="form-control"  required>
                            </div>
                            <div class="form-group">
                                <label for ='image'>Image</label>
                                <input type="file" id="image" name = 'image'>
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Parent</label>
                                <select id = "parent_id" name = "parent_id" class="form-control">
                                    @foreach($categoriesList as $list)
                                        <option value="{{$list->id}}">{{$list->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id = "description" name = "description" type="text" class="form-control">{{old('description')}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@stop
