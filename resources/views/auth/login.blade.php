@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h4 class="card-title text-center mb-4 fw-bold">Login Admin</h4>
                
                @if($errors->any())
                    <div class="alert alert-danger p-2 fs-6">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST" autocomplete="off">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required autocomplete="new-password">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection