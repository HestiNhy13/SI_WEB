@extends('backend.layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Riwayat Hidup</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('dashboard') }}">Home</a></li>
                    <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fa fa-files-o"></i>Pendidikan</li>
                </ol>
            </div>
        </div>
        <!-- form Validation -->
         <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">Pendidikan</header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <a href="{{ route('pendidikan.create') }}"><button class="btn btn-primary" type="button"><i class="fa fa-plus">Tambah</i></button></a>
                    </div>
                </section>
            </div> </div>
        <br><br>
        <table class="table table-striped table-advance table-haver">
            <tbody><tr>
                <th><i class="icon_bag"></i>Nama</th>
                <th><i class="icon_document"></i>Tingkatan</th>
                <th><i class="icon_calender"></i>Tahun Masuk</th>
                <th><i class="icon_calender"></i>Tahun Selesai</th>
                <th><i class="icon_cogs"></i>Action</th>
            </tr>
        @foreach ($pendidikan as $item) 
        <tr>
            <td>{{ $item->nama }}</td>
            <td> 
                @if ($item->tingkatan==1)TK
                @elseif($item->tingkatan==2)SD
                @elseif($item->tingkatan==3)SMP
                @elseif($item->tingkatan==4)SMA?SMK
                @elseif($item->tingkatan==5)D3
                @elseif($item->tingkatan==6)D4/S1
                @elseif($item->tingkatan==7)S2
                @elseif($item->tingkatan==8)S3
            @endif
            </td>
            <td>{{ $item->tahun_masuk }}</td>
            <td>{{ $item->tahun_keluar }}</td>
            <div class="btn-group">
                    <form action="{{ route('pendidikan.destroy', $item->id) }}" method="post">
                    <a class="btn btn-warning" herf="{{ route('pendidikan.edit',$item) }}">
                        <i class="fa fa-edit"></i></a>
                     <!-- @csrf 
                     @method('DELETE')    -->
                    <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                        <i class="fa fa-trash-o"></i>
                    </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
        </table>
         <!--page end -->
    </section>
</section>

@endsection