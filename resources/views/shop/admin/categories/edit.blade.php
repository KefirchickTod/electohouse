
@include('layouts.app')
@section('content')
    @php /** @var \App\Models\ShopCategory $item */ @endphp
    <form method="POST" action="{{route('shop.admin.categories.update', $item->id)}}">
        @method('PATCH')
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8"></div>
                <div class="col-md-4"></div>
            </div>
        </div>

    </form>
@endsection
