@extends('frontend.layouts.customer')
@section('content')
    <div class="container h-100">
      <div class="row d-flex
        justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
    
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Cambiar Contraseña</p>
    
                    <form method="POST" action="{{ route('customer.update-password') }}">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input type="current_password" id="current_password" class="form-control" name="current_password" required autocomplete="current-password" />
                                <label class="form-label
                                " for="current_password">Contraseña Actual</label>
                                @error('current_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input type="new_password" id="new_password" class="form-control" name="new_password" required autocomplete="new-password" />
                                <label class="form-label
                                " for="new_password">Nueva Contraseña</label>
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Cambiar Contraseña</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                    <img src="/img/logo.png" alt="Logo" class="img-fluid">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>
@endsection