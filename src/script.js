document.addEventListener("DOMContentLoaded", () => {
      /* ---------------- SPECIALS SLIDER ---------------- */
      (function () {
            const slider = document.querySelector(".specials-slider");
            const slides = slider
                  ? slider.querySelectorAll(".special-slide")
                  : null;
            const indicators = document.querySelectorAll(
                  ".specials-indicators .indicator"
            );
            const nextBtn = document.getElementById("nextSpecialBtn");
            const prevBtn = document.getElementById("prevSpecialBtn");

            if (
                  !slider ||
                  !slides ||
                  slides.length === 0 ||
                  indicators.length === 0
            )
                  return;

            let current = 0;

            function showSlide(index) {
                  if (index < 0) index = slides.length - 1;
                  if (index >= slides.length) index = 0;
                  slider.style.transform = `translateX(-${index * 100}%)`;
                  indicators[current]?.classList.remove("active");
                  indicators[index]?.classList.add("active");
                  current = index;
            }

            function nextSlide() {
                  showSlide(current + 1);
            }
            function prevSlide() {
                  showSlide(current - 1);
            }

            nextBtn?.addEventListener("click", nextSlide);
            prevBtn?.addEventListener("click", prevSlide);
            indicators.forEach((btn, i) =>
                  btn.addEventListener("click", () => showSlide(i))
            );

            setInterval(nextSlide, 5000);

            document.addEventListener("keydown", (e) => {
                  if (e.key === "ArrowLeft") prevSlide();
                  if (e.key === "ArrowRight") nextSlide();
            });
      })();

      /* ---------------- GLOBAL CART (available on all pages) ---------------- */
      (function () {
            const cartToggle = document.getElementById("cartToggle");
            const cartSidebar = document.getElementById("cartSidebar");
            const closeCart = document.getElementById("closeCart");
            const cartCountHeader = document.getElementById("cartCountHeader");
            const cartItemsEl = document.getElementById("cartItems");
            const cartTotalEl = document.getElementById("cartTotal");
            const cartCountEl = document.getElementById("cartCount");

            let cart = JSON.parse(localStorage.getItem("siteCart")) || [];

            function saveCart() {
                  localStorage.setItem("siteCart", JSON.stringify(cart));
            }

            function updateCartUI() {
                  // if there is no cart list element on page, just update counts
                  if (!cartItemsEl) {
                        if (cartCountEl)
                              cartCountEl.textContent = cart.reduce(
                                    (s, i) => s + Number(i.qty),
                                    0
                              );
                        if (cartCountHeader)
                              cartCountHeader.textContent = cart.reduce(
                                    (s, i) => s + Number(i.qty),
                                    0
                              );
                        return;
                  }

                  cartItemsEl.innerHTML = "";
                  let total = 0;
                  cart.forEach((it, idx) => {
                        total += Number(it.price) * Number(it.qty);
                        const row = document.createElement("div");
                        row.className = "cart-item";
                        row.innerHTML = `
            <div class="meta">
              <h4>${it.name}</h4>
              <p class="cart-price">₱${Number(it.price).toFixed(2)}</p>
              <div class="controls">
                <div class="qty-controls">
                  <button data-idx="${idx}" class="decrease">-</button>
                  <span class="qty">${it.qty}</span>
                  <button data-idx="${idx}" class="increase">+</button>
                </div>
                <button data-idx="${idx}" class="remove">Delete</button>
              </div>
            </div>
            <div class="thumb"><img src="${
                  it.img || "../assets/images/sample1.jpg"
            }" alt="${it.name}" /></div>`;
                        cartItemsEl.appendChild(row);
                  });

                  if (cartTotalEl)
                        cartTotalEl.textContent = `₱${total.toFixed(2)}`;
                  if (cartCountEl)
                        cartCountEl.textContent = cart.reduce(
                              (s, i) => s + Number(i.qty),
                              0
                        );
                  if (cartCountHeader)
                        cartCountHeader.textContent = cart.reduce(
                              (s, i) => s + Number(i.qty),
                              0
                        );

                  // announcer
                  const announcer = document.getElementById("cartAnnounce");
                  if (announcer)
                        announcer.textContent = `Cart updated. ${cart.reduce(
                              (s, i) => s + Number(i.qty),
                              0
                        )} item(s) total.`;

                  // wire controls (stop propagation to avoid global click closing when clicked)
                  cartItemsEl.querySelectorAll(".increase").forEach((btn) =>
                        btn.addEventListener("click", (e) => {
                              e.stopPropagation();
                              const i = +btn.dataset.idx;
                              cart[i].qty = Number(cart[i].qty) + 1;
                              saveCart();
                              updateCartUI();
                        })
                  );

                  cartItemsEl.querySelectorAll(".decrease").forEach((btn) =>
                        btn.addEventListener("click", (e) => {
                              e.stopPropagation();
                              const i = +btn.dataset.idx;
                              if (cart[i].qty > 1)
                                    cart[i].qty = Number(cart[i].qty) - 1;
                              else cart.splice(i, 1);
                              saveCart();
                              updateCartUI();
                        })
                  );

                  cartItemsEl.querySelectorAll(".remove").forEach((btn) =>
                        btn.addEventListener("click", (e) => {
                              e.stopPropagation();
                              const i = +btn.dataset.idx;
                              cart.splice(i, 1);
                              saveCart();
                              updateCartUI();
                        })
                  );
            }

            function addToCart(item, amount) {
                  if (!item || !item.name) return;
                  const idx = cart.findIndex(
                        (c) => c.name === item.name && c.price === item.price
                  );
                  if (idx >= 0)
                        cart[idx].qty = Number(cart[idx].qty) + Number(amount);
                  else
                        cart.push({
                              name: item.name,
                              price: Number(item.price),
                              qty: Number(amount),
                              img: item.img || "",
                        });
                  saveCart();
                  updateCartUI();
                  const ct = document.getElementById("cartToggle");
                  if (ct) {
                        ct.classList.add("cart-burst");
                        setTimeout(
                              () => ct.classList.remove("cart-burst"),
                              260
                        );
                  }
            }

            function openCartSidebar() {
                  if (!cartSidebar) return;
                  cartSidebar.classList.add("open");
                  cartToggle?.classList.add("expanded");
                  cartSidebar.focus && cartSidebar.focus();
            }

            function closeCartSidebar() {
                  if (!cartSidebar) return;
                  cartSidebar.classList.remove("open");
                  cartToggle?.classList.remove("expanded");
            }

            // expose to window so other modules (modals/menu) can call it
            window.addToCart = addToCart;
            window.openCartSidebar = openCartSidebar;
            window.closeCartSidebar = closeCartSidebar;

            // wire up UI
            cartToggle?.addEventListener("click", () => {
                  const isOpen = cartSidebar?.classList.contains("open");
                  if (!isOpen) openCartSidebar();
                  else closeCartSidebar();
            });

            // Close cart when user clicks outside of it
            document.addEventListener("click", (e) => {
                  if (!cartSidebar) return;
                  if (!cartSidebar.classList.contains("open")) return;
                  const tgt = e.target;
                  if (cartSidebar.contains(tgt) || cartToggle?.contains(tgt))
                        return;
                  closeCartSidebar();
            });

            closeCart?.addEventListener("click", (e) => {
                  e.stopPropagation();
                  closeCartSidebar();
            });

            cartSidebar?.addEventListener("click", (e) => {
                  if (e.target === cartSidebar) closeCartSidebar();
            });

            // initial render
            updateCartUI();
      })();

      /* ---------------- MENU CATEGORIES / SCROLL ---------------- */
      (function () {
            function getTopOffset() {
                  const navbar = document.getElementById("navbar");
                  const announcement =
                        document.getElementById("announcement-bar");
                  let offset = 0;
                  if (navbar) offset += navbar.offsetHeight;
                  if (
                        announcement &&
                        announcement.classList.contains("visible")
                  ) {
                        offset += announcement.offsetHeight;
                  }
                  // small breathing room
                  offset += 12;
                  return offset;
            }

            function scrollToSectionById(id) {
                  const el = document.getElementById(id);
                  if (!el) return;
                  const top =
                        el.getBoundingClientRect().top +
                        window.pageYOffset -
                        getTopOffset();
                  window.scrollTo({ top, behavior: "smooth" });
            }

            const categoryButtons = Array.from(
                  document.querySelectorAll(".menu-categories button")
            );
            if (categoryButtons.length) {
                  categoryButtons.forEach((btn) => {
                        btn.addEventListener("click", () => {
                              document
                                    .querySelector(".menu-categories .active")
                                    ?.classList.remove("active");
                              btn.classList.add("active");
                              const targetId = btn.dataset.target;
                              scrollToSectionById(targetId);
                        });
                  });
            }

            const sections = Array.from(
                  document.querySelectorAll(".menu-section")
            );
            if (sections.length && categoryButtons.length) {
                  window.addEventListener("scroll", () => {
                        let current = "";
                        const offset = getTopOffset() + 8;
                        sections.forEach((sec) => {
                              const top = sec.offsetTop - offset;
                              if (pageYOffset >= top) current = sec.id;
                        });

                        categoryButtons.forEach((btn) => {
                              btn.classList.toggle(
                                    "active",
                                    btn.dataset.target === current
                              );
                        });
                  });
            }

            const sidebarButtons = document.querySelectorAll(
                  ".menu-sidebar button"
            );
            if (sidebarButtons.length) {
                  sidebarButtons.forEach((btn) => {
                        btn.addEventListener("click", () => {
                              document
                                    .querySelector(".menu-sidebar .active")
                                    ?.classList.remove("active");
                              btn.classList.add("active");
                              const targetId = btn.dataset.target;
                              scrollToSectionById(targetId);
                        });
                  });
            }

            document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
                  function setOpenState(open) {
                        const parent = toggle.closest(".dropdown");
                        if (!parent) return;
                        parent.classList.toggle("open", open);
                  }

                  toggle.addEventListener("click", (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        const parent = toggle.closest(".dropdown");
                        const isOpen = parent?.classList.contains("open");
                        setOpenState(!isOpen);
                  });

                  toggle.addEventListener("keydown", (e) => {
                        if (e.key === "Enter" || e.key === " ") {
                              e.preventDefault();
                              toggle.click();
                        }
                  });
            });

            document.addEventListener("click", () => {
                  document.querySelectorAll(".dropdown.open").forEach((d) => {
                        d.classList.remove("open");
                  });
            });
      })();

      /* ---------------- MENU & ITEM MODAL ---------------- */
      (function () {
            const modalOverlay = document.getElementById("modalOverlay");

            let activeTrap = null;
            let lastFocused = null;

            function getFocusable(container) {
                  if (!container) return [];
                  return Array.from(
                        container.querySelectorAll(
                              'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])'
                        )
                  ).filter((el) => !el.hasAttribute("disabled"));
            }

            function trapFocus(container) {
                  const focusables = getFocusable(container);
                  if (focusables.length === 0) return () => {};
                  const first = focusables[0];
                  const last = focusables[focusables.length - 1];

                  function onKey(e) {
                        if (e.key === "Tab") {
                              if (
                                    e.shiftKey &&
                                    document.activeElement === first
                              ) {
                                    e.preventDefault();
                                    last.focus();
                              } else if (
                                    !e.shiftKey &&
                                    document.activeElement === last
                              ) {
                                    e.preventDefault();
                                    first.focus();
                              }
                        }
                        if (e.key === "Escape") {
                              const overlay =
                                    container.closest(".modal-overlay") ||
                                    document.getElementById("cartSidebar");
                              if (
                                    overlay &&
                                    overlay.classList.contains("cart-sidebar")
                              ) {
                                    closeCartSidebar();
                              } else if (
                                    overlay &&
                                    overlay.classList.contains("modal-overlay")
                              ) {
                                    closeModal(overlay);
                              }
                        }
                  }

                  document.addEventListener("keydown", onKey);
                  return () => document.removeEventListener("keydown", onKey);
            }

            function openModal(overlay) {
                  if (!overlay) return;
                  lastFocused = document.activeElement;
                  overlay.classList.add("open", "show");
                  const box = overlay.querySelector(".modal-box") || overlay;
                  const focusables = getFocusable(box);
                  (focusables[0] || box).focus();
                  activeTrap = trapFocus(box);
            }

            function closeModal(overlay) {
                  if (!overlay) return;
                  overlay.classList.remove("open", "show");
                  if (typeof activeTrap === "function") {
                        activeTrap();
                        activeTrap = null;
                  }
                  if (lastFocused) lastFocused.focus();
            }

            /* -- modal: simplified item modal (menu.php) -- */
            const modalItemName = document.getElementById("modalItemName");
            const modalItemPrice = document.getElementById("modalItemPrice");
            const qtyDisplay = document.getElementById("qtyDisplay");
            const minusQty = document.getElementById("minusQty");
            const addQty = document.getElementById("addQty");
            const addToCartBtn = document.getElementById("addToCartBtn");
            const closeModalBtn = document.getElementById("closeModal");

            const modalItemImage = document.getElementById("modalItemImage");
            const sizeRowEl = document.getElementById("sizeRow");
            const modalIngredientsEl =
                  document.getElementById("modalIngredients");

            if (modalOverlay && modalItemName && modalItemPrice && qtyDisplay) {
                  let selectedItem = null;
                  let qty = 1;

                  function updateQty() {
                        qtyDisplay.textContent = qty;
                  }

                  // Open modal when Order buttons are clicked (buttons have class .modal-btn)
                  document.querySelectorAll(".modal-btn").forEach((btn) => {
                        btn.addEventListener("click", (e) => {
                              e.stopPropagation();
                              const item =
                                    btn.dataset.item ||
                                    btn.closest(".menu-card")?.dataset.name ||
                                    "";
                              const price =
                                    btn.dataset.price ||
                                    btn.closest(".menu-card")?.dataset.price ||
                                    "";
                              selectedItem = {
                                    name: item,
                                    price: Number(price),
                              };

                              // images from data attributes (size variants)
                              if (btn.dataset.imgSmall)
                                    selectedItem.imgSmall =
                                          btn.dataset.imgSmall;
                              if (btn.dataset.imgMedium)
                                    selectedItem.imgMedium =
                                          btn.dataset.imgMedium;
                              if (btn.dataset.imgLarge)
                                    selectedItem.imgLarge =
                                          btn.dataset.imgLarge;

                              // ingredients
                              if (btn.dataset.ingredients)
                                    selectedItem.ingredients =
                                          btn.dataset.ingredients;

                              // try to get image from nearby card if no data-img provided
                              const imgEl = btn
                                    .closest(".menu-card")
                                    ?.querySelector("img");
                              if (!selectedItem.imgLarge && imgEl)
                                    selectedItem.img = imgEl.src;

                              modalItemName.textContent =
                                    selectedItem.name || "";
                              modalItemPrice.textContent =
                                    selectedItem.price || "";
                              // image preview
                              const previewSrc =
                                    selectedItem.imgLarge ||
                                    selectedItem.img ||
                                    selectedItem.imgMedium ||
                                    selectedItem.imgSmall ||
                                    "";
                              if (modalItemImage && previewSrc)
                                    modalItemImage.src = previewSrc;

                              // show size options for drinks (if any size images present)
                              if (
                                    selectedItem.imgSmall ||
                                    selectedItem.imgMedium ||
                                    selectedItem.imgLarge ||
                                    btn.dataset.type === "drink"
                              ) {
                                    if (sizeRowEl)
                                          sizeRowEl.style.display = "block";
                              } else if (sizeRowEl)
                                    sizeRowEl.style.display = "none";

                              // ingredients display
                              if (modalIngredientsEl)
                                    modalIngredientsEl.textContent =
                                          selectedItem.ingredients
                                                ? "Ingredients: " +
                                                  selectedItem.ingredients
                                                : "";

                              qty = 1;
                              updateQty();
                              openModal(modalOverlay);
                        });
                  });

                  minusQty?.addEventListener("click", (e) => {
                        e.stopPropagation();
                        if (qty > 1) qty--;
                        updateQty();
                  });
                  addQty?.addEventListener("click", (e) => {
                        e.stopPropagation();
                        qty++;
                        updateQty();
                  });

                  closeModalBtn?.addEventListener("click", () =>
                        closeModal(modalOverlay)
                  );

                  // click outside modal to close
                  modalOverlay.addEventListener("click", (e) => {
                        if (e.target === modalOverlay) closeModal(modalOverlay);
                  });

                  // size option handling (buttons inside sizeRow)
                  if (sizeRowEl) {
                        sizeRowEl
                              .querySelectorAll(".size-btn")
                              .forEach((btn) => {
                                    btn.addEventListener("click", (e) => {
                                          e.stopPropagation();
                                          sizeRowEl
                                                .querySelectorAll(".size-btn")
                                                .forEach((b) =>
                                                      b.classList.remove(
                                                            "active"
                                                      )
                                                );
                                          btn.classList.add("active");
                                          const size = btn.dataset.size;
                                          if (!selectedItem) return;
                                          const src =
                                                selectedItem[
                                                      "img" +
                                                            (size
                                                                  .charAt(0)
                                                                  .toUpperCase() +
                                                                  size.slice(1))
                                                ] ||
                                                selectedItem[
                                                      "img" +
                                                            (size === "medium"
                                                                  ? "Medium"
                                                                  : "")
                                                ] ||
                                                selectedItem.img ||
                                                "";
                                          if (modalItemImage && src)
                                                modalItemImage.src = src;
                                    });
                              });
                  }

                  addToCartBtn?.addEventListener("click", () => {
                        if (!selectedItem) return alert("No item selected");
                        const itemToAdd = {
                              name: selectedItem.name,
                              price: Number(selectedItem.price) || 0,
                              qty: qty,
                              img:
                                    modalItemImage?.src ||
                                    selectedItem.img ||
                                    "",
                        };
                        if (typeof window.addToCart === "function")
                              window.addToCart(itemToAdd, qty);
                        closeModal(modalOverlay);
                        if (typeof window.openCartSidebar === "function")
                              window.openCartSidebar();
                  });
            }

            // Delivery address toggle in cart sidebar
            (function () {
                  const deliverySelect =
                        document.getElementById("deliverySelect");
                  const addrWrap = document.getElementById(
                        "deliveryAddressWrap"
                  );
                  deliverySelect?.addEventListener("change", () => {
                        if (addrWrap)
                              addrWrap.style.display =
                                    deliverySelect.value === "delivery"
                                          ? "block"
                                          : "none";
                  });
            })();

            // Checkout summary wiring
            (function () {
                  const checkoutBtn = document.getElementById("checkoutBtn");
                  const checkoutOverlay =
                        document.getElementById("checkoutOverlay");
                  const closeCheckout =
                        document.getElementById("closeCheckout");
                  const checkoutSummary =
                        document.getElementById("checkoutSummary");
                  const confirmCheckout =
                        document.getElementById("confirmCheckout");

                  function formatCurrency(n) {
                        return "₱" + Number(n).toFixed(2);
                  }

                  checkoutBtn?.addEventListener("click", (e) => {
                        e.preventDefault();
                        const cart =
                              JSON.parse(localStorage.getItem("siteCart")) ||
                              [];
                        if (!cart || cart.length === 0)
                              return alert("Your cart is empty");
                        const payment =
                              document.getElementById("paymentSelect")?.value ||
                              "cash";
                        const delivery =
                              document.getElementById("deliverySelect")
                                    ?.value || "pickup";
                        const address =
                              document.getElementById("deliveryAddress")
                                    ?.value || "";

                        let html = `<div><strong>Payment:</strong> ${payment}</div><div><strong>Delivery:</strong> ${delivery}${
                              delivery === "delivery"
                                    ? " — " +
                                      (address || "(no address provided)")
                                    : ""
                        }</div><hr/>`;
                        let total = 0;
                        cart.forEach((it) => {
                              total += Number(it.price) * Number(it.qty);
                              html += `<div style="display:flex;justify-content:space-between;align-items:center;margin:8px 0;"><div><strong>${
                                    it.name
                              }</strong><div style="font-size:0.9rem;opacity:0.9">Qty: ${
                                    it.qty
                              } × ${formatCurrency(
                                    it.price
                              )}</div></div><div style="text-align:right">${formatCurrency(
                                    Number(it.price) * Number(it.qty)
                              )}</div></div>`;
                        });
                        html += `<hr/><div style="text-align:right;font-weight:700">Total: ${formatCurrency(
                              total
                        )}</div>`;
                        checkoutSummary.innerHTML = html;
                        if (checkoutOverlay) {
                              checkoutOverlay.style.display = "flex";
                              checkoutOverlay.classList.add("open", "show");
                        }
                  });

                  closeCheckout?.addEventListener("click", () => {
                        if (checkoutOverlay) {
                              checkoutOverlay.classList.remove("open", "show");
                              checkoutOverlay.style.display = "none";
                        }
                  });

                  confirmCheckout?.addEventListener("click", () => {
                        const cart =
                              JSON.parse(localStorage.getItem("siteCart")) ||
                              [];
                        if (!cart || cart.length === 0)
                              return alert("Cart is empty");
                        const payment =
                              document.getElementById("paymentSelect")?.value ||
                              "cash";
                        const delivery =
                              document.getElementById("deliverySelect")
                                    ?.value || "pickup";
                        const address =
                              document.getElementById("deliveryAddress")
                                    ?.value || "";
                        // build final order details
                        let details = `Order Summary:\n`;
                        cart.forEach((it) => {
                              details += `${it.qty} x ${it.name} @ ₱${Number(
                                    it.price
                              ).toFixed(2)} = ₱${(
                                    Number(it.price) * Number(it.qty)
                              ).toFixed(2)}\n`;
                        });
                        details += `Total: ₱${cart
                              .reduce(
                                    (s, i) =>
                                          s + Number(i.price) * Number(i.qty),
                                    0
                              )
                              .toFixed(
                                    2
                              )}\nPayment: ${payment}\nDelivery: ${delivery}${
                              delivery === "delivery"
                                    ? "\nAddress: " + address
                                    : ""
                        }`;
                        alert(details);
                        // clear cart and refresh
                        localStorage.setItem("siteCart", JSON.stringify([]));
                        location.reload();
                  });
            })();

            // cart UI and interactions are handled by the global cart module
      })();

      /* ---------------- Intersection Observer: reveal animations ---------------- */
      (function () {
            const revealEls = document.querySelectorAll(
                  ".reveal, .fadeUp, .fade-in, [data-animate]"
            );
            if (!("IntersectionObserver" in window) || revealEls.length === 0)
                  return;

            const io = new IntersectionObserver(
                  (entries) => {
                        entries.forEach((entry) => {
                              if (entry.isIntersecting) {
                                    const el = entry.target;
                                    const delay = el.dataset.delay;
                                    if (delay) el.style.transitionDelay = delay;
                                    el.classList.add("in-view");
                                    io.unobserve(entry.target);
                              }
                        });
                  },
                  { threshold: 0.15 }
            );

            revealEls.forEach((el) => io.observe(el));
      })();

      /* ---------------- Navbar scroll behavior ---------------- */
      (function () {
            const navbar = document.getElementById("navbar");
            if (!navbar) return;
            const set = () => {
                  if (window.scrollY > 8) navbar.classList.add("scrolled");
                  else navbar.classList.remove("scrolled");
            };
            set();
            window.addEventListener("scroll", () => set());
      })();
});
