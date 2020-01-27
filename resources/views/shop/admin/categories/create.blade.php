@include('layouts.app')
@section('content')
    <form method="POST" action="{{route('shop.admin.categories.store')}}" enctype="multipart/form-data">

        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Category</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Edit category</h3>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id = "title" name="title"  class="form-control" minlength="3" required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input id = "slug" name = "slug" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Parent</label>
                                <select id = "parent_id" name = "parent_id" class="form-control">
                                    @foreach($categoryList as $list)
                                        <option value="{{$list->id}}">{{$list->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id = "description" name = "description" type="text" class="form-control"></textarea>
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
