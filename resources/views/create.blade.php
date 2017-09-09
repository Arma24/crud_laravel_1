@extends('layouts')

@section('title', 'Add')

@section('content')
    <div>
        <form method="POST" action="{{ route('data.store') }}">
            {{ csrf_field() }}
            <p> NIS : <input type="text" name="nis"> </p>
            <p> Nama : <input type="text" name="name"> </p>
            <p> Kelas : <input type="text" name="class"> </p>
            <p> Jenis Kelamin :
                <select name="gender">
                    <option value="Laki-laki"> Laki-laki </option>
                    <option value="Perempuan"> Perempuan </option>
                </select>
            </p>
            <p> Email : <input type="text" name="email"> </p>
            <p><button type="submit"> Tambah </button></p>
        </form>
    </div>
@endsection