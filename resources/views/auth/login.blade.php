<x-auth-layout>
    <x-slot:title>
        Login
    </x-slot>
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="/auth/login"><img src="{{ asset('assets/static/images/logo/logo-telu.png') }}" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Login.</h1>
                <p class="auth-subtitle mb-5 text-center">Aplikasi Hitung Prediksi Kebangkrutan dengan Model Grover</p>

                <form action="{{ route('auth.login.store') }}" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" name="remember">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div>
                    <button class="btn btn-danger btn-block btn-lg shadow-lg mt-3">Login</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Don't have an account? <a href="{{ route('auth.register.index') }}" class="font-bold">Sign up</a>.</p>
                    {{-- <p><a class="font-bold" href="#">Forgot password?</a>.</p> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>
</x-auth-layout>
