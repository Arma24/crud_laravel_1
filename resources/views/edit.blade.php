@extends('layouts')

@section('title', 'Edit')

@section('content')
    <div>
        <form method="POST" action="{{ route('data.update', $user->id) }}">
            {{ csrf_field() }}
            {!! method_field('patch') !!}
            <p> NIS : <input type="text" name="nis" value="{{ $user->nis }}"> </p>
            <p> Nama : <input type="text" name="name" value="{{ $user->name }}"> </p>
            <p> Kelas : <input type="text" name="class" value="{{ $user->kelas }}"> </p>
            <p> Jenis Kelamin :
                <select name="gender">
                    <option value="Laki-laki"> Laki-laki </option>
                    <option value="Perempuan"> Perempuan </option>
                </select>
            </p>
            <p> Email : <input type="text" name="email" value="{{ $user->email }}"> </p>
            <p><button type="submit"> Edit </button></p>
        </form>
    </div>
@endsection