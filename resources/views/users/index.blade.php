<x-app title="{{ $type = request()->type == 'admin' ? 'Administrators' : 'Customers' }}" :links="['Home', 'Users', $type]">
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid " >
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <div class="card">
                        <div class="card-header border-0 pt-6">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <i class="ki-duotone ki-magnifier fs-2 position-absolute ms-3">
                                        <i class="path1"></i><i class="path2"></i>
                                    </i>
                                    <input type="text" id="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search User" aria-label="search">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" data-table data-search-using="#search">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Gender</th>
                                        <th>Phone Number</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach($users as $user)
                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <a href="{{ route('users.show', $user) }}">
                                                        <div class="symbol-label">
                                                            <img src="{{ $user->photo }}" alt="Customer" class="w-100">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="{{ route('users.show', $user) }}" class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ route('users.show', $user) }}" class="text-gray-600 text-hover-primary mb-1">{{ $user->email ?? 'None' }}</a>
                                            </td>
                                            <td>
                                                <div @class([
                                                    'badge',
                                                    'badge-light-danger'    => $user->isBanned(),
                                                    'badge-light-success'   => ! $user->isBanned()
                                                ])>
                                                    {{ $user->isBanned() ? 'Suspended' : 'Active' }}
                                                </div>
                                            </td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->phone }}</td>
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
