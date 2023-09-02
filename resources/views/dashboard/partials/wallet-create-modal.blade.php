<!-- Payment Modal-->
<div class="modal fade" id="payment-modal" tabindex="-1" aria-labelledby="payment-modal-label" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="update-label">Choose Wallet Type</h3>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-abstract-11 fs-2"><i class="path1"></i><i class="path2"></i></i>
                </div>
            </div>
            <div class="modal-body">
                <form x-submit action="{{ route('api.users.wallets.store', user()) }}" @finish="location.reload()" x-data>
                    <div class="fv-row mb-10">
                        <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target=".payment-option">
                            <div class="col-12 col-md-6">
                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-4 payment-option">
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-center">
                                        <input class="form-check-input" type="radio" name="type_id" value="1" checked="checked">
                                    </span>
                                    <span class="ms-5">
                                        <span class="fs-6 fw-bold text-gray-800 d-block">Emergency</span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-4 payment-option">
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start">
                                        <input class="form-check-input" type="radio" name="type_id" value="2">
                                    </span>
                                    <span class="ms-5">
                                        <span class="fs-6 fw-bold text-gray-800 d-block">Locked</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-10 fv-row">
                        <div class="input-group mb-2">
                            <input class="form-control" name="name" aria-label="name" placeholder="Wallet Name" required>
                        </div>
                    </div>
                    <div class="mb-10 fv-row">
                        <div class="input-group mb-2">
                            <span class="input-group-text text-muted">₦</span>
                            <input class="form-control" type="number" name="amount" aria-label="amount" placeholder="Enter Amount..."
                                   required
                            >
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-primary">Make Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
