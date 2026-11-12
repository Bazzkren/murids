@extends('murids.layout')

@section('content')
    <div class="card mt-5">
        <h2 class="card-header">Edit Murid</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('murids.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>

            <form action="{{ route('murids.update', $murid->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Name:</strong></label>
                    <input type="text" name="name" value="{{ $murid->name }}"
                        class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Name">
                    @error('name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputNis" class="form-label"><strong>NIS:</strong></label>
                    <input type="text" name="nis" value="{{ $murid->nis }}"
                        class="form-control @error('nis') is-invalid @enderror" id="inputNis" placeholder="NIS">
                    @error('nis')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputRombel" class="form-label"><strong>Rombel:</strong></label>
                    <input type="text" name="rombel" value="{{ $murid->rombel }}"
                        class="form-control @error('rombel') is-invalid @enderror" id="inputRombel" placeholder="Rombel">
                    @error('rombel')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Detail:</strong></label>
                    <textarea class="form-control @error('detail') is-invalid @enderror" style="height:150px" name="detail"
                        id="inputDetail" placeholder="Detail">{{ $murid->detail }}</textarea>
                    @error('detail')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            </form>

        </div>
    </div>
@endsection
