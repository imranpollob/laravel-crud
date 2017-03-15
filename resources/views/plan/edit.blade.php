@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('plans.index') }}/{{$plan->id}}" method="post">
    {{ method_field('PATCH') }}
    Plan title <input type="text" name="title" value="{{ $plan->title }}"> <br>
    Plan body <input type="text" name="body" value="{{ $plan->body }}"> <br>
    {{ csrf_field() }}
    <input type="submit" name="submit" value="Submit">
</form>