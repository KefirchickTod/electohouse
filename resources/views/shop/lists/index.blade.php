<table>
    @foreach ($item as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->short_text}}</td>
            <td>{{$value->category_id}}</td>
        </tr>
    @endforeach
</table>
