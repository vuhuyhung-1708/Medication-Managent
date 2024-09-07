@extends('medicines.master')
@section('title','Edit Medicine')
@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card_header text-center text-primary"><h3>Edit Medicine</h3></div>
        <div class="card-body">
            <form action="{{ route('medicines.update', $medicine->medicine_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <style>
                    .container {
                        display: flex;
                        flex-direction: column;
                    }

                    .row {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-between;
                        margin-bottom: 1rem;
                    }
                </style>
                <div class="container">
                    <!-- Name field -->
                    <div class="row mb-3">
                        <label for="col-sm-2 col-label-form">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{ $medicine->name }}"/>
                        </div>
                    </div>
                    <!-- Brand field -->
                    <div class="row mb-3">
                        <label for="col-sm-2 col-label-form">Brand</label>
                        <div class="col-sm-10">
                            <input type="text" name="brand" class="form-control" value="{{ $medicine->brand }}"/>
                        </div>
                    </div>
                    <!-- Dosage field -->
                    <div class="row mb-3">
                        <label for="col-sm-2 col-label-form">Dosage</label>
                        <div class="col-sm-10">
                            <input type="text" name="dosage" class="form-control" value="{{ $medicine->dosage }}"/>
                        </div>
                    </div>
                    <!-- Form field -->
                    <div class="row mb-3">
                        <label for="col-sm-2 col-label-form">Form</label>
                        <div class="col-sm-10">
                            <input type="text" name="form" class="form-control" value="{{ $medicine->form }}"/>
                        </div>
                    </div>
                    <!-- Price field -->
                    <div class="row mb-3">
                        <label for="col-sm-2 col-label-form">Price</label>
                        <div class="col-sm-10">
                            <input type="number" step="0.01" name="price" class="form-control" value="{{ $medicine->price }}"/>
                        </div>
                    </div>
                    <!-- Stock field -->
                    <div class="row mb-3">
                        <label for="col-sm-2 col-label-form">Stock</label>
                        <div class="col-sm-10">
                            <input type="number" name="stock" class="form-control" value="{{ $medicine->stock }}"/>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('medicines.index') }}" class="btn btn-secondary">Back</a>
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
        </div>
    </div>
@endsection
