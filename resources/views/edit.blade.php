@extends('layouts.app')



@section('content')
<div class="container">


    <h2 class="mt-5">EditItem </h2>
    <form method="post" action="/request/{{ $item->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" class="form-control" placeholder="Enter Text" name="text" onkeypress="myFunction(event)"
                value="{{ $item->text }}">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <input type="text" class="form-control" placeholder="Enter body" name="body" onkeypress="myFunction(event)"
                value="{{ $item->body }}">
        </div>
        <button type="submit" class="btn btn-lg btn-danger mt-4" name="button">Submit</button>
    </form>

</div>
@endsection


<script>
    function myFunction(event) {
        console.log(event)
        /*      if(event.keyCode<1500){
                 alert('لطفا فارسی تایپ کنید')
             } */
    }

</script>
