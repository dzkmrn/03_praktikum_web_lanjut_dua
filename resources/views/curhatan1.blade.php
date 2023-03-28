@extends('layouts.app')

@section('content')

<p class="text-muted">
<table border="2" width="100%">
    @foreach($datacurhatan as $ch)
    <tr>
        <th width="300px">Nama Lengkap</th>
        <th>{{$ch -> nama}}</th>
    </tr>
    <tr>
        <th width="300px">Keterangan</th>
        <th>{{$ch -> keterangan}}</th>
    </tr>
    <tr>
        <th width="300px">Curhatan</th>
        <th>{{$ch -> curhatan}}</th>
    </tr>
    @endforeach
</table>
</p>

@endsection