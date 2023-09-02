<x-app title="Wallets"  :links="['Admin', 'Wallets']">
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid " >
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <div class="card card-flush">
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-2 position-absolute ms-3">
                                        <i class="path1"></i><i class="path2"></i>
                                    </i>
                                    <input type="text" id="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Wallet" aria-label="search">
                                </div>
                                <!--end::Search-->
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table align-middle table-row-dashed table-hover fs-6 gy-5" data-table data-search-using="#search">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th>Wallet ID</th>
                                        <th>User</th>
                                        <th>Type</th>
                                        <th>Balance</th>
                                        <th>Date Created</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach($wallets as $wallet)
                                        <tr class="cursor-pointer">
                                            <td data-order="{{ $wallet->id }}" class="min-w-50px">
                                                <a href="" class="text-gray-800 text-hover-primary fw-bold">#{{ $wallet->id }}</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-35px overflow-hidden me-2">
                                                        <a href="{{ route('users.show', $wallet->user) }}">
                                                            <div class="symbol-label">
                                                                <img src="{{ $wallet->user->photo }}" alt="{{ $wallet->user->name }}" class="w-100" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="ms-2">
                                                        <a href="{{ route('users.show', $wallet->user) }}" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $wallet->user->name }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <div @class([
                                                        'badge',
                                                        'badge-light-info' => $wallet->type->id == 1,
                                                        'badge-light-primary' => $wallet->type->id == 2,
                                                    ])>
                                                        {{ $wallet->type->id == 1  ? 'Emergency' : 'Locked' }}
                                                    </div>

                                            </td>
                                            <td><span class="fw-bold">₦{{ number_format($wallet->balance) }}</span></td>
                                            <td class="min-w-50px" data-order="{{ $wallet->created_at }}">
                                                <span class="fw-bold">{{ $wallet->created_at->format('d M Y, h:i a') }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end:::Main-->
</x-app>
