<a href="{{ route('plans.create') }}">Add New</a>

@if(count($plans) > 0)
<table border="1">
    @foreach($plans as $plan)
        <tr>
            <td><a href="{{route('plans.index')}}/{{$plan->id}}"> {{ $plan->title }} </a></td>
            <td><a href="{{route('plans.index')}}/{{$plan->id}}/edit">Edit</a></td>
            <form action="{{ route('plans.index') }}/{{$plan->id}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <td><input type="submit" name="submit" value="Delete"></td>
            </form>
        </tr>
    @endforeach
</table>
@else
No entry found
@endif