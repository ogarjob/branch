<x-auth>
    <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
        <form id="signup-form" action="{{ route('api.register') }}" class="form w-100" x-data x-submit
              @finish="location.reload()">
            <div class="text-center mb-11">
                <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
            </div>

            @include('auth.partials.socialite-buttons')

            <div class="row">
                <div class="col-md-6 mb-6">
                    <input id="first-name" name="first_name" type="text" placeholder="First Name" class="form-control form-control-solid" required/>
                </div>
                <div class="col-md-6 mb-6">
                    <input id="last-name" name="last_name" type="text" placeholder="Last Name" class="form-control form-control-solid" required/>
                </div>
            </div>
            <div class="fv-row mb-6">
                <input id="email" name="email" type="email" placeholder="Email" class="form-control form-control-solid" required>
            </div>
            <div class="fv-row mb-6">
                <input id="phone" name="phone" type="number" placeholder="Phone Number" class="form-control form-control-solid" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-6">
                    <select name="gender" class="form-select form-select-solid" required>
                        <option value="M">male</option>
                        <option value="F">female</option>
                    </select>
                </div>
                <div class="col-md-6 mb-6">
                    <select name="type" class="form-select form-select-solid">
                        <option value="admin">Admin</option>
                        <option value="customer">User</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 fv-row" data-kt-password-meter="true">
                <div class="mb-1">
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-solid" aria-label="password"
                               type="password" placeholder="Password" name="password" autocomplete="off" required
                        >
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                    </div>
                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                </div>
                <div class="text-muted"><sup>Password Strength</sup></div>
            </div>
            <div class="fv-row mb-7 mt-0">
                <input class="form-control form-control-solid" type="password" aria-label="password"
                       placeholder="Confirm Password" name="password_confirmation" autocomplete="off" required
                >
            </div>
            <div class="fv-row mb-6">
                <label class="form-check form-check-inline">
                    <input class="form-check-input form-check-solid" type="checkbox" name="" value="" required/>
                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                        I Accept the <a href="#" class="ms-1 link-primary">Terms</a>
                    </span>
                </label>
            </div>
            <div class="d-grid mb-10">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-user-circle"></i> Create Account
                </button>
            </div>
            <div class="text-gray-500 text-center fw-semibold fs-6">
                Already have an Account?
                <a href="{{ route('login') }}" class="link-primary fw-semibold">Sign in</a>
            </div>
        </form>
    </div>
</x-auth>
