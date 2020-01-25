
@include('layouts.app')
@section('content')
    @php /** @var \App\Models\ShopCategory $item */ @endphp
    <form method="POST" action="{{route('shop.admin.categories.update', $item->id)}}">
        @method('PATCH')
        @csrf
        <div class="container">
            @if($errors->any())
                <script>alert("ERROR!")</script>
            @endif
            @if(session('success'))
                    <script>alert("success!")</script>

                @endif
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Category</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Edit category</h3>
                            </div>
                            <hr>
                            @include('shop.admin.categories.include.item_edit_add_col')
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    <div class="card" style="margin-top: 15px">
                        <div class="card-body">
                            <span>Id : {{$item->id}}</span>
                            <input type="hidden" value="{{$item->id}}" name="id">
                        </div>
                    </div>
                    <div class="card" style="margin-top: 15px">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="created_at">Created at</label>
                                <input name="created_at" id="created_at" class="form-group" disabled value="{{$item->created_at}}">
                            </div>
                            <div class="form-group">
                                <label for="updated_at">Updated at</label>
                                <input name="updated_at" id="updated_at" class="form-group" disabled value="{{$item->updated_at}}">
                            </div>
                            <div class="form-group">
                                <label for="deleted_at">Created at</label>
                                <input name="deleted_at" id="deleted_at" class="form-group" disabled value="{{$item->deleted_at}}" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>

