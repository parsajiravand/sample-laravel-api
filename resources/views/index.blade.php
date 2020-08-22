@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Items</h2>
    @if(count($items)>0)
        @foreach($items as $item)

            <ul class="list-group">

                <li class="list-group-item d-flex justify-content-between align-items-center mt-4">
                    <a href="/request/{{ $item->id }}/edit">
                        {{ $item->body }}
                        <span class="badge">{{ $item->created_at }}</span>
                        <p>{{ $item->text }}</p>
                    </a>

                    <form action="/request/{{ $item->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ">Delete</button>
                    </form>
                </li>


            </ul>

        @endforeach
    @else
        <p>No items there</p>
    @endif

</div>
@endsection
