(function () {
    var csrfToken = document.querySelector('meta[name="csrf-token"]').content;
    var resultEl = document.getElementById('result');
    var redeemActionEl = document.getElementById('redeem-action');
    var redeemBtn = document.getElementById('redeem-btn');
    var manualInput = document.getElementById('manual-code');
    var manualBtn = document.getElementById('manual-check-btn');

    var colors = {
        valid: '#2e7d32',
        redeemed: '#2e7d32',
        already_redeemed: '#c62828',
        expired: '#c62828',
        invalid: '#c62828',
    };

    var pendingCode = null;

    function showResult(status, message) {
        resultEl.style.display = 'block';
        resultEl.style.background = colors[status] || '#555';
        resultEl.textContent = message;
    }

    function post(url, code) {
        return fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                Accept: 'application/json',
            },
            body: JSON.stringify({ code: code }),
        }).then(function (res) {
            return res.json();
        });
    }

    function checkCode(code) {
        pendingCode = code;
        redeemActionEl.style.display = 'none';

        post('/staff/vouchers/check', code).then(function (data) {
            var text = data.status === 'valid'
                ? data.message + ' (' + data.amount + ' €, ' + data.buyer_name + ')'
                : data.message;

            showResult(data.status, text);

            if (data.status === 'valid') {
                redeemActionEl.style.display = 'block';
            }
        });
    }

    redeemBtn.addEventListener('click', function () {
        if (!pendingCode) return;

        post('/staff/vouchers/redeem', pendingCode).then(function (data) {
            showResult(data.status, data.message);
            redeemActionEl.style.display = 'none';
            pendingCode = null;
        });
    });

    manualBtn.addEventListener('click', function () {
        var code = manualInput.value.trim();
        if (code) checkCode(code);
    });

    // Scanning continues after each decode (rather than stopping) so staff can move straight
    // to the next voucher; the same code re-decoding while the "Redeem now" button is still
    // showing is harmless since checkCode() only re-reads status, it never redeems by itself.
    var scanner = new Html5Qrcode('qr-reader');
    scanner.start(
        { facingMode: 'environment' },
        { fps: 10, qrbox: 250 },
        function (decodedText) {
            checkCode(decodedText);
        },
        function () {}
    ).catch(function (err) {
        showResult('invalid', 'Kamera konnte nicht gestartet werden: ' + err);
    });
})();
