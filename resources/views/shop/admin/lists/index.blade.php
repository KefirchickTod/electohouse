@include('layouts.app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{route('shop.admin.lists.create')}}">Add</a>
                </nav>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Список товарів</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <tr>
                                        <th data-label = 'Дії'>Дії</th>
                                        <th data-label = 'Назва'>Назва</th>
                                        <th data-label = 'Ціна'>Ціна</th>
                                        <th data-label = 'Категорія'>Категорія</th>
                                        <th data-label = 'Опубліковано'>Опубліковано</th>
                                        <th data-label = 'Статус'>Статус</th>
                                        <th data-label = 'Автор'>Автор</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pagination as $item)
                                    @php /** @var \App\Models\ShopList $item */ @endphp
                                    <tr>
                                        <td>
                                            <div class="row justify-content-around">
                                                <a href="{{$item->slug}}"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('shop.admin.lists.edit', $item->id)}}"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('shop.admin.lists.destroy', $item->id)}}"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td>{{$item->title}}</td>
                                        <td>0</td>
                                        <td>{{$item->categories_id}}</td>
                                        <td>{{$item->is_punlished}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>{{$item->author_id}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
