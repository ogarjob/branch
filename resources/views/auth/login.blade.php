<x-auth>
    <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
        <form action="{{ route('api.login') }}" method="POST" class="form w-100"
              x-data x-submit @finish="location.reload()"
        >
            <div class="text-center mb-10">
                <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
            </div>

            @include('auth.partials.socialite-buttons')

            <div class="fv-row mb-8">
                <input id="email" type="email" name="email" placeholder="Email"
                    class="form-control form-control-solid" required aria-label="email"
                />
            </div>

            <div class="fv-row mb-8" data-kt-password-meter="true">
                <div class="mb-1">
                    <div class="position-relative mb-3">
                        <input id="password" name="password" type="password"
                               class="form-control form-control-solid" placeholder="Password"/>
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                            data-kt-password-meter-control="visibility">
                            <i class="bi bi-eye-slash fs-2"></i>
                            <i class="bi bi-eye fs-2 d-none"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold my-8">
                <div class="">
                    <label for="remember" class="form-check form-check-inline">
                        <input id="remember" name="remember" class="form-check-input" type="checkbox"/>
                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                        Remember me
                    </span>
                    </label>
                </div>

                <a href="javascript:" class="link-primary">Forgot your password?</a>
            </div>

            <div class="d-grid mb-10">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-sign-in-alt"></i> Log In
                </button>
            </div>
            <div class="text-gray-500 text-center fw-semibold fs-6">
                Do not have an account yet?
                <a href="{{ route('register') }}" class="link-primary">Sign Up for free</a>
            </div>
        </form>
    </div>
</x-auth>
