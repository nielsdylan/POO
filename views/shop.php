<main class="wrap section--tight">
  <nav class="label" aria-label="Breadcrumb" style="margin-bottom:var(--s-4)">
    <a href="index.html">Home</a> / <span>Shop</span>
  </nav>

  <div class="sechead">
    <div>
      <h1>All plants</h1>
      <p>Everything currently potted and ready to send.</p>
    </div>
  </div>

  <div class="shoplayout">
    <aside class="filters" aria-label="Filters">
      <div class="filters__group">
        <p class="filters__title">Light</p>
        <label class="filters__row"><input class="check" type="checkbox" data-filter-check="light-bright" /> Bright <span class="count">7</span></label>
        <label class="filters__row"><input class="check" type="checkbox" data-filter-check="light-low" /> Low light <span class="count">2</span></label>
      </div>
      <div class="filters__group">
        <p class="filters__title">Size</p>
        <label class="filters__row"><input class="check" type="checkbox" data-filter-check="size-small" /> Small <span class="count">5</span></label>
        <label class="filters__row"><input class="check" type="checkbox" data-filter-check="size-medium" /> Medium <span class="count">2</span></label>
        <label class="filters__row"><input class="check" type="checkbox" data-filter-check="size-large" /> Large <span class="count">2</span></label>
      </div>
      <div class="filters__group">
        <p class="filters__title">Good for</p>
        <label class="filters__row"><input class="check" type="checkbox" data-filter-check="pet-safe" /> Pet safe <span class="count">4</span></label>
        <label class="filters__row"><input class="check" type="checkbox" data-filter-check="easy-care" /> Easy care <span class="count">6</span></label>
        <label class="filters__row"><input class="check" type="checkbox" data-filter-check="sale" /> On sale <span class="count">2</span></label>
      </div>
      <button class="btn btn--ghost btn--sm" type="button" data-clear-filters>Clear all filters</button>
    </aside>

    <div>
      <div class="shoptoolbar">
        <div class="chips" role="group" aria-label="Quick filters">
          <button class="chip" type="button" aria-pressed="false" data-filter="easy-care">Easy care</button>
          <button class="chip" type="button" aria-pressed="false" data-filter="pet-safe">Pet safe</button>
          <button class="chip" type="button" aria-pressed="false" data-filter="light-low">Low light</button>
          <button class="chip" type="button" aria-pressed="false" data-filter="sale">Sale</button>
        </div>
        <span class="shoptoolbar__count" style="margin-left:auto">
          <b class="num" data-result-count>10</b> plants
        </span>
        <label class="sr-only" for="sort">Sort by</label>
        <select class="select" id="sort" data-sort style="width:auto">
          <option value="featured">Featured</option>
          <option value="price-asc">Price, low to high</option>
          <option value="price-desc">Price, high to low</option>
          <option value="name">Name, A–Z</option>
        </select>
      </div>

      <div class="grid grid--3" data-product-grid>
        <article class="product" data-tags="light-bright easy-care size-large sale" data-price="4200"
                 data-name="Monstera Deliciosa" data-order="0" data-product>
          <a class="product__media" href="product.html" aria-label="Monstera Deliciosa">
            <img src="https://images.unsplash.com/photo-1545241047-6083a3684587?w=700&q=72&auto=format&fit=crop" alt="Monstera Deliciosa in a plain pot"
                 width="700" height="875" fetchpriority="high" decoding="async" />
          </a>
          <div class="product__flags"><span class="badge badge--sale">Sale</span></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Monstera Deliciosa to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="monstera" data-name="Monstera Deliciosa" data-price="4200"
                    data-image="https://images.unsplash.com/photo-1545241047-6083a3684587?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Monstera Deliciosa</h3></a>
            <p class="product__latin">Monstera deliciosa</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Bright indirect</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Weekly</span>
            </div>
            <div class="product__foot">
              <span class="price price--sale">
                <span class="price__now">£42.00</span><span class="price__was">£52.00</span>
              </span>
            </div>
          </div>
        </article>
        <article class="product" data-tags="light-low pet-safe size-medium" data-price="3400"
                 data-name="Rattlesnake Calathea" data-order="1" data-product>
          <a class="product__media" href="product.html" aria-label="Rattlesnake Calathea">
            <img src="https://images.unsplash.com/photo-1602923668104-8f9e03e77e62?w=700&q=72&auto=format&fit=crop" alt="Rattlesnake Calathea in a plain pot"
                 width="700" height="875" fetchpriority="high" decoding="async" />
          </a>
          <div class="product__flags"><span class="badge badge--stock">Pet safe</span></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Rattlesnake Calathea to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="calathea" data-name="Rattlesnake Calathea" data-price="3400"
                    data-image="https://images.unsplash.com/photo-1602923668104-8f9e03e77e62?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Rattlesnake Calathea</h3></a>
            <p class="product__latin">Goeppertia insignis</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Low to medium</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Twice weekly</span>
            </div>
            <div class="product__foot">
              <span class="price">
                <span class="price__now">£34.00</span>
              </span>
            </div>
          </div>
        </article>
        <article class="product" data-tags="light-bright size-small" data-price="5800"
                 data-name="Ginseng Ficus Bonsai" data-order="2" data-product>
          <a class="product__media" href="product.html" aria-label="Ginseng Ficus Bonsai">
            <img src="https://images.unsplash.com/photo-1512428813834-c702c7702b78?w=700&q=72&auto=format&fit=crop" alt="Ginseng Ficus Bonsai in a plain pot"
                 width="700" height="875" loading="lazy" decoding="async" />
          </a>
          <div class="product__flags"><span class="badge badge--low">Low stock</span></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Ginseng Ficus Bonsai to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="bonsai" data-name="Ginseng Ficus Bonsai" data-price="5800"
                    data-image="https://images.unsplash.com/photo-1512428813834-c702c7702b78?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Ginseng Ficus Bonsai</h3></a>
            <p class="product__latin">Ficus microcarpa</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Bright indirect</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Twice weekly</span>
            </div>
            <div class="product__foot">
              <span class="price">
                <span class="price__now">£58.00</span>
              </span>
            </div>
          </div>
        </article>
        <article class="product" data-tags="light-bright easy-care pet-safe size-small" data-price="1800"
                 data-name="Zebra Haworthia" data-order="3" data-product>
          <a class="product__media" href="product.html" aria-label="Zebra Haworthia">
            <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=700&q=72&auto=format&fit=crop" alt="Zebra Haworthia in a plain pot"
                 width="700" height="875" loading="lazy" decoding="async" />
          </a>
          <div class="product__flags"><span class="badge badge--stock">Pet safe</span></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Zebra Haworthia to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="haworthia" data-name="Zebra Haworthia" data-price="1800"
                    data-image="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Zebra Haworthia</h3></a>
            <p class="product__latin">Haworthiopsis attenuata</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Bright direct</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Fortnightly</span>
            </div>
            <div class="product__foot">
              <span class="price">
                <span class="price__now">£18.00</span>
              </span>
            </div>
          </div>
        </article>
        <article class="product" data-tags="light-bright easy-care size-small" data-price="1400"
                 data-name="Moon Cactus" data-order="4" data-product>
          <a class="product__media" href="product.html" aria-label="Moon Cactus">
            <img src="https://images.unsplash.com/photo-1509937528035-ad76254b0356?w=700&q=72&auto=format&fit=crop" alt="Moon Cactus in a plain pot"
                 width="700" height="875" loading="lazy" decoding="async" />
          </a>
          <div class="product__flags"><span class="badge badge--new">New in</span></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Moon Cactus to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="moon-cactus" data-name="Moon Cactus" data-price="1400"
                    data-image="https://images.unsplash.com/photo-1509937528035-ad76254b0356?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Moon Cactus</h3></a>
            <p class="product__latin">Gymnocalycium mihanovichii</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Bright direct</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Monthly</span>
            </div>
            <div class="product__foot">
              <span class="price">
                <span class="price__now">£14.00</span>
              </span>
            </div>
          </div>
        </article>
        <article class="product" data-tags="light-bright easy-care pet-safe size-small" data-price="2200"
                 data-name="Echeveria in Concrete" data-order="5" data-product>
          <a class="product__media" href="product.html" aria-label="Echeveria in Concrete">
            <img src="https://images.unsplash.com/photo-1483794344563-d27a8d18014e?w=700&q=72&auto=format&fit=crop" alt="Echeveria in Concrete in a plain pot"
                 width="700" height="875" loading="lazy" decoding="async" />
          </a>
          <div class="product__flags"></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Echeveria in Concrete to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="echeveria" data-name="Echeveria in Concrete" data-price="2200"
                    data-image="https://images.unsplash.com/photo-1483794344563-d27a8d18014e?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Echeveria in Concrete</h3></a>
            <p class="product__latin">Echeveria elegans</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Bright direct</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Fortnightly</span>
            </div>
            <div class="product__foot">
              <span class="price">
                <span class="price__now">£22.00</span>
              </span>
            </div>
          </div>
        </article>
        <article class="product" data-tags="light-low easy-care size-medium sale" data-price="1600"
                 data-name="Lucky Bamboo" data-order="6" data-product>
          <a class="product__media" href="product.html" aria-label="Lucky Bamboo">
            <img src="https://images.unsplash.com/photo-1567331711402-509c12c41959?w=700&q=72&auto=format&fit=crop" alt="Lucky Bamboo in a plain pot"
                 width="700" height="875" loading="lazy" decoding="async" />
          </a>
          <div class="product__flags"><span class="badge badge--sale">Sale</span></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Lucky Bamboo to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="bamboo" data-name="Lucky Bamboo" data-price="1600"
                    data-image="https://images.unsplash.com/photo-1567331711402-509c12c41959?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Lucky Bamboo</h3></a>
            <p class="product__latin">Dracaena sanderiana</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Low light</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Weekly</span>
            </div>
            <div class="product__foot">
              <span class="price price--sale">
                <span class="price__now">£16.00</span><span class="price__was">£20.00</span>
              </span>
            </div>
          </div>
        </article>
        <article class="product" data-tags="light-bright size-large" data-price="4600"
                 data-name="Boxwood Topiary" data-order="7" data-product>
          <a class="product__media" href="product.html" aria-label="Boxwood Topiary">
            <img src="https://images.unsplash.com/photo-1520412099551-62b6bafeb5bb?w=700&q=72&auto=format&fit=crop" alt="Boxwood Topiary in a plain pot"
                 width="700" height="875" loading="lazy" decoding="async" />
          </a>
          <div class="product__flags"></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Boxwood Topiary to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="topiary" data-name="Boxwood Topiary" data-price="4600"
                    data-image="https://images.unsplash.com/photo-1520412099551-62b6bafeb5bb?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Boxwood Topiary</h3></a>
            <p class="product__latin">Buxus sempervirens</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Bright indirect</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Weekly</span>
            </div>
            <div class="product__foot">
              <span class="price">
                <span class="price__now">£46.00</span>
              </span>
            </div>
          </div>
        </article>
        <article class="product" data-tags="light-bright easy-care pet-safe size-small" data-price="2600"
                 data-name="Succulent Trio" data-order="8" data-product>
          <a class="product__media" href="product.html" aria-label="Succulent Trio">
            <img src="https://images.unsplash.com/photo-1459156212016-c812468e2115?w=700&q=72&auto=format&fit=crop" alt="Succulent Trio in a plain pot"
                 width="700" height="875" loading="lazy" decoding="async" />
          </a>
          <div class="product__flags"></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Succulent Trio to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="succulent-trio" data-name="Succulent Trio" data-price="2600"
                    data-image="https://images.unsplash.com/photo-1459156212016-c812468e2115?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Succulent Trio</h3></a>
            <p class="product__latin">Mixed species</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Bright direct</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Fortnightly</span>
            </div>
            <div class="product__foot">
              <span class="price">
                <span class="price__now">£26.00</span>
              </span>
            </div>
          </div>
        </article>
        <article class="product" data-tags="light-bright easy-care size-medium" data-price="1200"
                 data-name="Eucalyptus Stems" data-order="9" data-product>
          <a class="product__media" href="product.html" aria-label="Eucalyptus Stems">
            <img src="https://images.unsplash.com/photo-1466781783364-36c955e42a7f?w=700&q=72&auto=format&fit=crop" alt="Eucalyptus Stems in a plain pot"
                 width="700" height="875" loading="lazy" decoding="async" />
          </a>
          <div class="product__flags"><span class="badge badge--low">Low stock</span></div>
          <button class="product__wish" type="button" aria-pressed="false"
                  aria-label="Save Eucalyptus Stems to wishlist"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20s-7-4.5-7-9.2A4 4 0 0 1 12 8a4 4 0 0 1 7 2.8C19 15.5 12 20 12 20Z"/></svg></button>
          <div class="product__quick">
            <button class="btn btn--primary btn--sm btn--block" type="button"
                    data-add="eucalyptus" data-name="Eucalyptus Stems" data-price="1200"
                    data-image="https://images.unsplash.com/photo-1466781783364-36c955e42a7f?w=200&q=72&auto=format&fit=crop" data-variant="12cm pot">
              Add to basket
            </button>
          </div>
          <div class="product__body">
            <a href="product.html"><h3 class="product__name">Eucalyptus Stems</h3></a>
            <p class="product__latin">Eucalyptus cinerea</p>
            <div class="caremeta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"/></svg>Bright indirect</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3s6 6.2 6 10a6 6 0 0 1-12 0c0-3.8 6-10 6-10Z"/></svg>Change water weekly</span>
            </div>
            <div class="product__foot">
              <span class="price">
                <span class="price__now">£12.00</span>
              </span>
            </div>
          </div>
        </article>
      </div>

      <div class="empty" data-no-results hidden>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
        <h2>Nothing matches those filters</h2>
        <p>Try removing one — pet safe and low light together is a short list in any nursery.</p>
        <button class="btn btn--primary btn--sm" type="button" data-clear-filters>Clear filters</button>
      </div>
    </div>
  </div>
</main>