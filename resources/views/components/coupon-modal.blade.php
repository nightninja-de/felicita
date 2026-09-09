<!-- Coupon Popup Modal -->
<div id="couponModal" class="modal" tabindex="-1" style="display:none;position:fixed;z-index:99999;left:0;top:0;width:100vw;height:100vh;background:rgba(0,0,0,0.5);justify-content:center;align-items:center;">
  <div style="background:#fff;border-radius:16px;max-width:400px;width:90%;padding:2rem;box-shadow:0 8px 32px rgba(0,0,0,0.2);text-align:center;position:relative;">
    <button id="closeCouponModal" style="position:absolute;top:1rem;right:1rem;background:none;border:none;font-size:1.5rem;line-height:1;cursor:pointer;">&times;</button>
    <h2 style="color:#bfa46b;margin-bottom:1rem;">Erhalten Sie 10% Rabatt!</h2>
    <p style="margin-bottom:1.5rem;">Erhalten Sie 10% Rabatt auf Zahlungen ab 100€.</p>
    <form id="couponForm">
      <input type="text" name="name" placeholder="Ihr Name" required style="width:100%;margin-bottom:1rem;padding:0.5rem;border-radius:8px;border:1px solid #ccc;">
      <input type="email" name="email" placeholder="Ihre E-Mail" required style="width:100%;margin-bottom:1rem;padding:0.5rem;border-radius:8px;border:1px solid #ccc;">
      <button type="submit" style="background:#bfa46b;color:#fff;padding:0.75rem 2rem;border:none;border-radius:8px;font-weight:bold;">10%-Gutschein erhalten</button>
    </form>
    <div id="couponStep2" style="display:none;margin-top:1.5rem;">
      <p style="margin-bottom:1rem;">Herzlichen Glückwunsch! Sie haben einen 10%-Rabattgutschein für Zahlungen ab 100€ erhalten.</p>
      <div id="couponSuccess" style="margin-top:1rem;color:#27ae60;font-weight:bold;display:none;">Gutschein erfolgreich erhalten!</div>
    </div>
  </div>
</div>
