@extends('layouts')

@section('title', 'Index')

@section('content')
    <div>
        <a href="{{ route('data.create') }}"> Add </a>
    </div>
    <div>
            @foreach ($users as $user)
                <ul>
                    <li>{{ $user->nis }}</li>
                    <li>{{ $user->name }}</li>
                    <li>{{ $user->class }}</li>
                    <li>{{ $user->gender }}</li>
                    <li>{{ $user->email }}</li>
                    <li><a href="{{ route('data.edit', $user->id) }}"> Edit </a></li>
                    <li>
                        <form method="POST" action="{{ route('data.destroy', $user->id) }}">
                            {{ csrf_field() }}
                            {!! method_field('delete') !!}
                            <button type="submit"> Delete </button>
                        </form>
                    </li>
                </ul>
            @endforeach
    </div>
@endsection