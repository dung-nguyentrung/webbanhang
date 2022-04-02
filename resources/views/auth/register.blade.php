<form method="POST" action="{{ route('register') }}" class="needs-validation tab-pane fade" autocomplete="off"
    novalidate id="signup-tab">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="su-name">Họ và tên</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="John Doe">
        <div class="invalid-feedback">Vui lòng cung cấp họ và tên của bạn.</div>
    </div>
    <div class="mb-3">
        <label for="su-email">Địa chỉ email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" placeholder="johndoe@example.com">
        <div class="invalid-feedback">Vui lòng cung cấp địa chỉ email.</div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="su-password">Mật khẩu</label>
        <div class="password-toggle">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">
            <label class="password-toggle-btn" aria-label="Show/hide password">
                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="su-password-confirm">Xác nhận mật khẩu</label>
        <div class="password-toggle">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
            <label class="password-toggle-btn" aria-label="Show/hide password">
                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
            </label>
        </div>
    </div>
    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
</form>