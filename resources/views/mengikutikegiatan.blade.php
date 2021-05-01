@extends('layout')
@section('title', 'Notifikasi Kegiatan')
@section('konten')
<!-- konten -->
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<div class="table-responsive">
    <div class="col-md-15 mt-5 mb-5">
        <h3 align="center">Notifikasi Kegiatan</h3>
    </div>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                {{-- <th scope="col">No</th> --}}
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Jenis Kegiatan</th>
                <th scope="col">Tanggal Kegiatan</th>
                <th scope="col">Jam Kegiatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rapat as $hr)    
            <tr>
                @if($hr->status_aproval !== "waiting")
                {{-- <td>{{ $loop->iteration }}</td> --}}
                <td>{{ $hr->nama_rapat }}</td>
                <td>{{ $hr->jenis_kegiatan }}</td>
                <td>{{ $hr->tgl_rapat }}</td>
                <td>{{ $hr->jam_rapat }}</td>
                <td>
                    @php
                        $link = "http://$hr->link"
                    @endphp
                    {{-- <a id="mylink" class="btn btn-sm btn-success">Hadir</a> --}}
                    <form action="{{route('absen')}}" method="POST">
                        @csrf
                        <a target="_blank" href="{{$link}}" class="btn btn-sm btn-success">Link Disini</a>
                        <button class="btn btn-sm btn-success" type="submit">Absen</button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
            @foreach ($pelatihan as $pl)  
            @if($pl->status_aproval !== "waiting")  
            <tr>
                {{-- <td>{{ $loop->iteration }}</td> --}} 
                <td>{{ $pl->nama_pelatihan }}</td>
                <td>{{ $pl->jenis_kegiatan }}</td>
                <td>{{ $pl->tgl_pelatihan }}</td>
                <td>{{ $pl->jam_pelatihan }}</td>
                <td>
                    @php
                        $links = "http://$pl->link"
                    @endphp
                    {{-- <a id="pelatihan" class="btn btn-sm btn-success">Hadir</a> --}}
                    <form action="{{route('absen')}}" method="POST">
                        @csrf
                        <a target="_blank" href="{{$links}}" class="btn btn-sm btn-success">Link Disini</a>
                        <button class="btn btn-sm btn-success" type="submit">Absen</button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>

{{-- js  buat misal link di klik dia buka 2 site, 1 buat jadiin kalo dia hadir --}}
{{-- <script> 
mylink.onclick = function(){
    open('{{$link}}');
    location.href = ('https://www.gmail.com');
}

pelatihan.onclick = function(){
    open('{{$links}}');
    location.href = ('https://www.gmail.com');
}
</script> --}}
<!-- end of konten -->
@endsection