@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Surat Keluar</b></div>
                <div class="panel-body">
                <form class="navbar-form navbar-left" method="GET" action="{{url('/suratkeluar/cari')}}">
                    
                    <input type="text" class="form-control" name="cari" style="" placeholder="Kata kunci pencarian ..." required>
                    <button type="submit" class="btn btn-info"><i class="icon-search icon-white"> </i> Cari</button>
                </form>
                <a href=" {{url('suratkeluar/tambah')}} " class="btn btn-info pull-right" style="margin-top: 8px;">Tambah Data</a><br>
                <br>
                <br>
                @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    {{Session::get('alert-success')}}
                </div>
                @endif
                    <table class="table table-striped">
                        <tr>
                            <th>No. Agd/Kode</th>
                            <th>Isi ringkas</th>
                            <th>Tujuan</th>
                            <th>Nomor, Tgl. Surat</th>
                            <th>Ket</th>
                            <th>Aksi</th>
                        </tr>
                        @if(count($surats))
                        @foreach($surats as $surat)
                        <tr>
                            <td>{{$surat->no_agenda}}/{{$surat->kode}}</td>
                            <td>{{$surat->isi_ringkas}}</td>
                            <td>{{$surat->tujuan}}</td>
                            <td>{{$surat->no_surat}}<br>{{$surat->tgl_surat}}</td>
                            <td>{{$surat->keterangan}}</td>
                            <td>
                            <a href=" {{url('suratkeluar/edit', $surat->id)}} " class="btn btn-info">Edit</a>
                            <a href=" {{url('suratkeluar/hapus', $surat->id)}} " class="btn btn-danger">Hapus</a>        
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7"><center>Data Tidak Di temukan</center></td>
                        </tr>
                        @endif
                    </table>
                    {{ $surats->render() }}             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
