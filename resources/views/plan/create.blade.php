@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('plans.store') }}" method="post">
    Plan title <input type="text" name="title"> <br>
    Plan body <input type="text" name="body"> <br>
    {{ csrf_field() }}
    <input type="submit" name="submit" value="Submit">
</form>