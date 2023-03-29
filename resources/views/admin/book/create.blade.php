@extends('backend.master')
@section('content')
<div class="card card-body">
    <form action="{{route("book-store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Tambahkan Data</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Buku</label>
            <input name="name" type="text" placeholder="Masukkan nama buku" class="form-control" id="name" >
            @error('name')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Pilih Kategori</label>
            <select class="form-control" name="category_id" id="category_id">
                <option label="pilih category"></option>
                @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            @error('name')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Penulis</label>
            <input name="author" type="text" placeholder="Masukkan nama penulis" class="form-control" id="author" >
            @error('author')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Tahun Terbit</label>
            <input name="year" type="text" placeholder="Masukkan nama tahun terbit" class="form-control" id="year" >
            @error('year')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input name="status" type="text" placeholder="Masukkan nama status" class="form-control" id="status" >
            @error('status')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="file_book" class="form-label">File Buku</label>
            <div class="input-groub">
                <input name="file_book" type="file" class="form-control" id="file_book" >
            </div>
            @error('file_book')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover_book" class="form-label">Cover Buku</label>
            <div class="input-groub">
                <input name="cover_book" type="file" class="form-control" id="cover_book" >
            </div>
            @error('cover_book')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection