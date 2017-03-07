@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/suratkeluar/update') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('no_agenda') ? ' has-error' : '' }}">
                            <label for="no_agenda" class="col-md-4 control-label">Nomer Agenda</label>

                            <div class="col-md-6">
                                <input id="no_agenda" type="text" class="form-control" name="no_agenda" value="{{ $surats->no_agenda }}" required autofocus disabled>

                                @if ($errors->has('no_agenda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_agenda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                            <label for="kode" class="col-md-4 control-label">kode Surat</label>

                            <div class="col-md-6">
                                <input id="kode" type="text" class="form-control" name="kode" value="{{ $surats->kode }}" required autofocus>

                                @if ($errors->has('kode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tujuan') ? ' has-error' : '' }}">
                            <label for="tujuan" class="col-md-4 control-label">Tujuan</label>

                            <div class="col-md-6">
                                <input id="tujuan" type="text" class="form-control" name="tujuan" value="{{ $surats->tujuan }}" required>

                                @if ($errors->has('tujuan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tujuan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('no_surat') ? ' has-error' : '' }}">
                            <label for="no_surat" class="col-md-4 control-label">Nomer Surat</label>

                            <div class="col-md-6">
                                <input id="no_surat" type="Number" class="form-control" name="no_surat" value="{{ $surats->no_surat }}" required>

                                @if ($errors->has('no_surat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_surat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tgl_surat') ? ' has-error' : '' }}">
                            <label for="tgl_surat" class="col-md-4 control-label">Tanggal Surat</label>

                            <div class="col-md-6">
                                <input id="tgl_surat" type="date" class="form-control" name="tgl_surat" value="{{ $surats->tgl_surat }}" required>

                                @if ($errors->has('tgl_surat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_surat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('isi_ringkas') ? ' has-error' : '' }}">
                            <label for="isi_ringkas" class="col-md-4 control-label">Isi ringkas</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="isi_ringkas" name="isi_ringkas">{{ $surats->isi_ringkas }}</textarea>
                                @if ($errors->has('isi_ringkas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isi_ringkas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                            <label for="keterangan" class="col-md-4 control-label">Keterangan</label>

                            <div class="col-md-6">
                                <input id="keterangan" type="text" class="form-control" name="keterangan" value="{{ $surats->keterangan }}" required>

                                @if ($errors->has('keterangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('keterangan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                                <button type="reset" class="btn btn-reset">
                                    <a href="{{url('/surat')}}" onclick="window.location.back();" style="text-decoration: none;">Kembali</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
