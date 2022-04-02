<form method="POST" action="{{ route('login') }}" class="needs-validation tab-pane fade show active" autocomplete="off"
    novalidate id="signin-tab">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="si-email">Tài khoản email: </label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>
        <div class="invalid-feedback">Vui lòng cung cấp tài khoản email</div>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="si-password">Mật khẩu</label>
        <div class="password-toggle">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
            <label class="password-toggle-btn" aria-label="Show/hide password">
                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
            </label>
        </div>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3 d-flex flex-wrap justify-content-between">
        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked'
                : '' }}>
            <label class="form-check-label" for="remember">Nhớ mật khẩu</label>
        </div>
        @if (Route::has('password.request'))
        <a class="fs-sm" href="{{ route('password.request') }}">Quên mật khẩu ?</a>
        @endif
    </div>
    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Đăng nhập</button>
</form>