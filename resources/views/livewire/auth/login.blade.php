<div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 col-lg-5">
            <div class="card border-0 shadow-lg">
                <div class="card-body p-5">
                    <div class="text-center">
                        <div class="mx-auto mb-4 text-center auth-logo">
                            <a href="index.html" class="logo-dark">
                                <img src="assets/images/logo-dark.png" height="32" alt="logo dark">
                            </a>

                            <a href="index.html" class="logo-light">
                                <img src="assets/images/logo-light.png" height="28" alt="logo light">
                            </a>
                        </div>
                        <h4 class="fw-bold text-dark mb-2">Selamat Datang!</h3>
                            <p class="text-muted">Silahkan masukan username dan password anda.</p>
                    </div>
                    @if (session()->has('error'))
                    <div class="alert alert-danger alert-icon mb-0" role="alert">
                        <div class="d-flex align-items-center">
                            <div
                                class="avatar-sm rounded bg-danger d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                <i class="bx bx-info-circle text-white"></i>
                            </div>
                            <div class="flex-grow-1">
                                {{ session('error') }}
                            </div>
                        </div>
                    </div>
                    @endif
                    <form class="mt-4" wire:submit='login'>
                        <div class="mb-3">
                            <label for="username" class="form-label">Email/Username</label>
                            <input type="username" class="form-control" id="username"
                                placeholder="Masukan email atau username" wire:model='username'>
                            @error('username')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password"
                                wire:model='password'>
                            @error('password')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label class="form-check-label" for="remember-me" wire:model='remember'>Remember me</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-dark btn-lg fw-medium" type="submit">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>