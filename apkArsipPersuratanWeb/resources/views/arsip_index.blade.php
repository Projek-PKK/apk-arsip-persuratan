@extends('partials/sidebar')

<style>
    th, td {
        vertical-align: middle; /* Center the content vertically */
    }
</style>

@section('Judul')
<i class="ri-archive-2-line sidebar-menu-item-icon"></i>
    Surat Arsip
@endsection

@section('isi')
<div class="px-3 py-2 bg-white rounded shadow">
<a href="/arsip/tambah" class="btn btn-primary">Tambah Arsip</a><br><br>
<form action="/arsip/search" method="GET">
    <label for="search">Date Format: YYYY-MM-DD</label><br>
    <input type="search" name="search" placeholder="Search">
    <button type="submit">
        find
    </button>
</form>
<br/><br/>
<form action="/arsip" method="GET"> <!-- Add this form for per_page -->
    <label for="per_page">Records Per Page: </label>
    <select name="per_page" id="per_page" onchange="this.form.submit()">
        <option value="3" @if($perPage == 3) selected @endif>3</option>
        <option value="5" @if($perPage == 5) selected @endif>5</option>
        <option value="10" @if($perPage == 10) selected @endif>10</option>
        <option value="25" @if($perPage == 25) selected @endif>25</option>
        <option value="50" @if($perPage == 50) selected @endif>50</option>
        <option value="100" @if($perPage == 100) selected @endif>100</option>
    </select>
</form>

<table class="table table-bordered" border="1">
<tr>
        <th class="text-center">ID</th>
        <th class="text-center">Kode Surat</th>
        <th class="text-center">Judul Surat</th>
        <th class="text-center">Jenis Surat</th>
        <th class="text-center">Perusahaan</th>
        <th class="text-center">Tanggal Surat</th>
        <th class="text-center">Perihal Surat</th>
        <th class="text-center">File</th>
        <th class="text-center">Keterangan</th>
        <th class="text-center">Action</th>
    </tr>

    @foreach($dataarsip as $a)
    <tr>
        <td>{{ $a->id_surat }}</td>
        <td>{{ $a->kode_surat }}</td>
        <td>{{ $a->judul_surat }}</td>
        <td>{{ $a->jenis_surat }}</td>
        <td>{{ $a->perusahaan }}</td>
        <td>
            @if ($a->tanggal_surat)
                {{ $a->tanggal_surat->format('Y-m-d') }}
            @else
                No Date Available
            @endif
        </td>

        <td>{{ $a->perihal_surat }}</td>
        <td>
            <a href="{{ asset('preview/' . $a->file_surat) }}" class="btn btn-success col-12 text-center" target="_blank">Preview</a><br>
            <a href="{{ asset('preview/' . $a->file_surat) }}" class="btn btn-info col-12 text-center" download>Download</a><br>
        </td>

        <td>{{ $a->keterangan }}</td>
        <td>
            <a href="/arsip/edit/{{ $a->id_surat }}" class="btn btn-warning col-12 text-center">Edit</a><br>
            <a href="/arsip/hapus/{{ $a->id_surat }} " class="btn btn-danger col-12 text-center">Hapus</a><br>
        </td>
    </tr>
    @endforeach
</table>

<!-- Pagination links -->
{{ $dataarsip->appends(['per_page' => $perPage])->links() }}

<br>
<br>
<a href="/surat_masuk" class="btn btn-primary">Surat Masuk</a>
<a href="/surat_keluar" class="btn btn-primary">Surat Keluar</a>
</div>
</div>
@endsection
