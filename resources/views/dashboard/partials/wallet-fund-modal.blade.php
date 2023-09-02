<div class="modal fade" id="fund-{{ $wallet->id }}-modal" tabindex="-1" aria-labelledby="transfer-modal-label" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="update-label">Fund Wallet</h3>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-abstract-11 fs-2"><i class="path1"></i><i class="path2"></i></i>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('api.wallets.fund', $wallet) }}"
                      x-data x-submit @finish="location.reload()"
                >
                    <div class="fv-row">
                        <label class="form-label">Current Balance</label>
                        <input disabled class="form-control" value="₦{{ number_format($wallet->balance) }}">
                    </div>
                    <div class="mb-10 fv-row">
                        <label class="form-label">&nbsp;</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text text-muted">₦</span>
                            <input class="form-control" type="number" name="amount" placeholder="Enter Amount" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-primary">Transfer Funds</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
