@extends('home.master')

@section('title', 'Home Page')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1>Home Page</h1>
            <p class="lead">Choose one of the options below to proceed</p>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Medicines</h5>
                        <p class="card-text">Manage and track your medicine information.</p>
                        <a href="{{ route('medicines.index') }}" class="btn btn-primary">View Medicine Information</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Sales</h5>
                        <p class="card-text">Track and manage your sales transactions.</p>
                        <a href="{{ route('sales.index') }}" class="btn btn-primary">View Sales Information</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Employee</h5>
                        <p class="card-text">Manage and track your employee information.</p>
                        <a href="{{ route('users.index') }}" class="btn btn-primary">View Employee Information</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nút Đăng Xuất -->
        <div class="text-center mt-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Log Out</button>
            </form>
        </div>
    </div>
@endsection
