<!-- Voucher Popup Modal -->
<div id="voucherModal" class="voucher-modal" style="display:none;position:fixed;z-index:9999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.5);align-items:center;justify-content:center;">
    <div class="voucher-modal-content" style="background:#fff;padding:32px 24px;border-radius:16px;max-width:400px;width:90%;position:relative;box-shadow:0 8px 32px rgba(0,0,0,0.18);">
        <button id="closeVoucherModal" style="position:absolute;top:12px;right:16px;background:none;border:none;font-size:1.5rem;line-height:1;cursor:pointer;">&times;</button>
        <h3 style="font-family:'Parisienne',cursive;font-size:2rem;color:#bfa46b;text-align:center;margin-bottom:24px;">Gutschein / Voucher</h3>
        <form id="voucherForm" method="POST" action="{{ route('voucher.checkout') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="voucher_name">Name</label>
                <input type="text" class="form-control" id="voucher_name" name="name" required>
            </div>
            <div class="form-group mb-3">
                <label for="voucher_email">E-Mail</label>
                <input type="email" class="form-control" id="voucher_email" name="email" required>
            </div>
            <div class="form-group mb-3">
                <label for="voucher_amount">Gutscheinbetrag (€)</label>
                <input type="number" class="form-control" id="voucher_amount" name="amount" min="10" step="1" required>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;background:#bfa46b;border:none;">Weiter zur Zahlung</button>
        </form>
    </div>
</div>

<!-- Popup Modal Styles (optional: move to CSS file) -->
<style>
.voucher-modal { display: none; }
.voucher-modal.active { display: flex !important; }
</style>

<!-- Popup Modal Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var voucherBtn = document.getElementById('voucherBtn');
    var voucherModal = document.getElementById('voucherModal');
    var closeVoucherModal = document.getElementById('closeVoucherModal');
    if (voucherBtn && voucherModal && closeVoucherModal) {
        voucherBtn.addEventListener('click', function(e) {
            e.preventDefault();
            voucherModal.classList.add('active');
        });
        closeVoucherModal.addEventListener('click', function() {
            voucherModal.classList.remove('active');
        });
        // Optional: close modal on outside click
        voucherModal.addEventListener('click', function(e) {
            if (e.target === voucherModal) voucherModal.classList.remove('active');
        });
    }
});
</script>
