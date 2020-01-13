
@include('admin_layouts.app')
@section('content')
    <div class = "container col-lg-6">
        <div class = "row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{route('shop.admin.categories.create')}}">Add</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Parent</th>
                            </thead>
                            <tbody>
                                @foreach($pagination as $item)
                                    @php /** @var \App\Models\ShopCategory $item */ @endphp
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td><a href="{{route('shop.admin.categories.edit', $item->id)}}">{{$item->title}}</a></td>
                                        <td>{{$item->parent_id}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if($pagination->total() > $pagination->count())
            <br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{$pagination->links()}}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
