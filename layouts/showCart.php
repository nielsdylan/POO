<div class="scrim" id="drawerScrim" data-open="false" aria-hidden="true"></div>
<aside class="drawer" data-open="false" role="dialog" aria-modal="true" aria-label="Your basket">
  <div class="drawer__head">
    <h2 style="font-size:var(--text-md)">Your basket</h2>
    <button class="btn btn--icon" type="button" data-action="close-drawer" aria-label="Close basket">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
    </button>
  </div>

  <div class="drawer__body">
    <div data-cart-empty>
      <div class="empty">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 7h12l-1 13H7L6 7Z"/><path d="M9 7a3 3 0 0 1 6 0"/></svg>
        <h3>Your basket is empty</h3>
        <p>Nothing potted up yet. Have a look through the nursery.</p>
        <a class="btn btn--primary btn--sm" href="shop.html">Shop plants</a>
      </div>
    </div>
    <div data-cart-lines="drawer" style="display:grid;gap:var(--s-5)"></div>
  </div>

  <div class="drawer__foot" data-cart-filled hidden>
    <div class="totalrow"><span>Subtotal</span><span class="num" data-cart-subtotal>£0</span></div>
    <div class="totalrow"><span>Delivery</span><span class="num" data-cart-delivery>Free</span></div>
    <div class="totalrow totalrow--grand"><span>Total</span><span class="num" data-cart-total>£0</span></div>
    <a class="btn btn--primary btn--block" href="cart.html">View basket</a>
    <button class="btn btn--ghost btn--block" type="button" data-toast="Checkout is where you wire in your own payment provider">Checkout</button>
  </div>
</aside>

<div class="toasts" aria-live="polite"></div>