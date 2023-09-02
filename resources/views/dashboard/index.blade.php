<x-app title="Dashboard" :links="['Home', 'Dashboard']">
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <div class="row gy-5 g-xl-10">
                        <div class="col-xl-4 mb-xl-10">
                            <div class="card h-md-100" dir="ltr">
                                <div class="card-body d-flex flex-column flex-center">
                                    <div class="mb-2">
                                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                                            Want to Activate <br> new
                                            <span class="fw-bolder">Wallet ?</span>
                                        </h1>
                                        <div class="py-10 text-center">
                                            <img src="{{ asset('media/svg/illustrations/easy/2.svg') }}" class="theme-light-show w-200px" alt="">
                                            <img src="{{ asset('media/svg/illustrations/easy/2-dark.svg') }}" class="theme-dark-show w-200px" alt="">
                                        </div>
                                    </div>
                                    <div class="text-center mb-1">
                                        <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#payment-modal">Activate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <div class="card card-flush h-xl-100">
                                <div class="card-header pt-7">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Active Wallets</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">
                                            You have {{ user('wallets')->count() }} active {{ user('wallets')->count() == 1 ? 'Wallet' : 'Wallets'}}
                                        </span>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-pills nav-pills-custom mb-3">
                                        @foreach(user('wallets') as $wallet)
                                            <li class="nav-item mb-3 me-3 me-lg-6">
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 {{ $loop->iteration == 1 ? 'active' : '' }}"
                                                   data-bs-toggle="pill" href="#wallet-{{ $wallet->id }}"
                                                >
                                                    <div class="nav-icon mb-3">
                                                        <i class="ki-duotone ki-wallet fs-1">
                                                            <i class="path1"></i><i class="path2"></i>
                                                            <i class="path3"></i><i class="path4"></i>
                                                        </i>
                                                    </div>
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">#{{ $wallet->id }}</span>
                                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="tab-content">
                                        @foreach(user('wallets') as $wallet)
                                            <div class="tab-pane fade {{ $loop->iteration == 1 ? 'active show' : '' }}"
                                                 id="wallet-{{ $wallet->id }}"
                                            >
                                                <div class="row g-5 g-xl-8">
                                                    <div class="col-md-6">
                                                        <div class="card bg-primary card-xl-stretch mb-xl-8">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between">
                                                                    <span class="symbol symbol-35px me-2">
                                                                        <span class="symbol-label bg-white">
                                                                            <i class="ki-duotone ki-dollar text-primary fs-2x">
                                                                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                                                            </i>
                                                                        </span>
                                                                    </span>
                                                                    <div class="btn btn-sm btn-light-primary btn-active-light-dark d-flex align-items-center px-4" data-bs-toggle="modal" data-bs-target="#fund-{{ $wallet->id }}-modal"
                                                                    >
                                                                        <i class="ki-duotone ki-credit-cart fs-2">
                                                                            <i class="path1"></i><i class="path2"></i>
                                                                        </i>
                                                                        Fund Wallet
                                                                    </div>
                                                                </div>
                                                                <div class="text-white fw-bold fs-2qx my-2 text-nowrap">
                                                                    ₦{{ number_format($wallet->balance) }}
                                                                </div>
                                                                <div class="fw-semibold text-white">Total Balance</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card bg-warning card-xl-stretch mb-xl-8">
                                                            <div class="card-body">
                                                                <div class="d-flex justify-content-between">
                                                                    <span class="symbol symbol-35px me-2">
                                                                        <span class="symbol-label bg-white">
                                                                            <i class="ki-duotone ki-lots-shopping fs-2x text-warning">
                                                                                <i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i>
                                                                                <i class="path5"></i><i class="path6"></i><i class="path7"></i><i class="path8"></i>
                                                                            </i>
                                                                        </span>
                                                                    </span>
                                                                    <div class="btn btn-sm btn-light d-flex align-items-center px-4" data-bs-toggle="modal" data-bs-target="#transfer-{{ $wallet->id }}-modal"
                                                                    >
                                                                        <i class="ki-duotone ki-send fs-2">
                                                                            <i class="path1"></i><i class="path2"></i>
                                                                        </i>
                                                                        Transfer Funds
                                                                    </div>
                                                                </div>
                                                                <div class="text-white fw-bold fs-2qx my-2">{{ $wallet->name }}</div>
                                                                <div class="fw-semibold text-white">{{ $wallet->type->name }} Wallet</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @include('dashboard.partials.wallet-fund-modal')

                                            @include('dashboard.partials.wallet-transfer-modal')

                                        @endforeach
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end:::Main-->

    @include('dashboard.partials.wallet-create-modal')

</x-app>
