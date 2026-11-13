@extends('murids.layout')

@section('content')

<div class="card mt-5">
<h2 class="card-header">Add New Murid</h2>
<div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('murids.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('murids.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="inputNisn" class="form-label"><strong>NIS:</strong></label>
            <input
                type="number"
                name="nisn"
                class="form-control @error('nisn') is-invalid @enderror"
                id="inputNisn"
                placeholder="NIS">
            @error('nisn')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputNama" class="form-label"><strong>Name:</strong></label>
            <input
                type="text"
                name="nama"
                class="form-control @error('nama') is-invalid @enderror"
                id="inputNama"
                placeholder="Name">
            @error('nama')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputRombel" class="form-label"><strong>Rombel:</strong></label>
            <input
                type="text"
                name="rombel"
                class="form-control @error('rombel') is-invalid @enderror"
                id="inputRombel"
                placeholder="Rombel">
            @error('rombel')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputRayon" class="form-label"><strong>Rayon:</strong></label>
            <input
                type="text"
                name="rayon"
                class="form-control @error('rayon') is-invalid @enderror"
                id="inputRayon"
                placeholder="Rayon">
            @error('rayon')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="inputAlamat" class="form-label"><strong>Alamat:</strong></label>
            <input
                type="text"
                name="alamat"
                class="form-control @error('alamat') is-invalid @enderror"
                id="inputAlamat"
                placeholder="Alamat">
            @error('alamat')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="inputNoTelp" class="form-label"><strong>No Telp:</strong></label>
            <input
                type="text"
                name="no_telp"
                class="form-control @error('no_telp') is-invalid @enderror"
                id="inputNoTelp"
                placeholder="No Telp">
            @error('no_telp')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputJenis_Kelamin" class="form-label"><strong>Jk:</strong></label>
            <select id="inputJenis_Kelamin" name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror">
                <option value="">--PILIH JENIS KELAMIN--</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan </option>
        </select>

            @error('jenis_kelamin')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>

</div>
</div>
@endsection
