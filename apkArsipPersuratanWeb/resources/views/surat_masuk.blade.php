<h3>Surat Masuk</h3>
<!-- Your search form here -->

<form action="/surat_masuk/search" method="GET">
    <label for="search">Date Format: YYYY-MM-DD</label><br>
    <input type="search" name="search" placeholder="Search">
    <button type="submit">Find</button>
</form>
<br><br>

<form action="/surat_masuk" method="GET"> <!-- Add this form for per_page -->
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
        <th>Kode Surat</th>
        <th>Judul Surat</th>
        <th>Perusahaan</th>
        <th>Tanggal Masuk</th>
        <th>Perihal Surat</th>
        <th>File</th>
        <th>Keterangan</th>
    </tr>

    @foreach($dataarsip as $a)
    <tr>
        <td>{{ $a->kode_surat }}</td>
        <td>{{ $a->judul_surat }}</td>
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
            <a href="{{ asset('preview/' . $a->file_surat) }}" target="_blank">Preview</a>
            |
            <a href="{{ asset('preview/' . $a->file_surat) }}" download>Download</a>
        </td>

        <td>{{ $a->keterangan }}</td>
    </tr>
    @endforeach
</table>

<!-- Pagination links -->
{{ $dataarsip->appends(['per_page' => $perPage])->links() }}


<br>
<br>
<a href="/surat_masuk" class="btn btn-primary">Surat Masuk</a><br>
<a href="/surat_keluar" class="btn btn-primary">Surat Keluar</a><br>