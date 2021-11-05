@extends('layouts.layout')
@section('main')
    <div class="main-content">
        <form class="navbar-search-form" role="search">
            <div class="input-group">
                <input type="text" value="{{ $search }}" name='search' class="form-control" placeholder="Search...">
                <span class="input-group-addon"><button><i class="fa fa-search"></i></button></span>
            </div>
        </form>
        <h2>Tên sinh viên : {{ $tenSV }}</h2>
        <br />
        @foreach ($namhoc as $namhoc)
            <a href="{{ route('diemsinhvien', [$idL, $tenSV, $idSV, $namhoc->idNH]) }}"><button type="submit"
                    class="btn btn-fill btn-info">Điểm năm {{ $namhoc->idNH }}</button></a>
            &ensp;
        @endforeach
    </div>
@endsection
