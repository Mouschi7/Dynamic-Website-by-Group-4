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
                              const target = document.getElementById(
                                    btn.dataset.target
                              );
                              target?.scrollIntoView({
                                    behavior: "smooth",
                                    block: "start",
                              });
                        });
                  });
            }

            const sections = Array.from(
                  document.querySelectorAll(".menu-section")
            );
            if (sections.length && categoryButtons.length) {
                  window.addEventListener("scroll", () => {
                        let current = "";
                        sections.forEach((sec) => {
                              const top = sec.offsetTop - 150;
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
                              const target = document.getElementById(
                                    btn.dataset.target
                              );
                              target?.scrollIntoView({ behavior: "smooth" });
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

            /* -- modal: detailed item modal -- */
            const modalTitle = document.getElementById("modalTitle");
            const modalDesc = document.getElementById("modalDesc");
            const qtyValue = document.getElementById("qtyValue");
            const sizeRow = document.getElementById("sizeRow");

            if (modalOverlay && modalTitle && modalDesc && qtyValue) {
                  let selectedItem = {};
                  document.querySelectorAll(".menu-card").forEach((card) => {
                        card.addEventListener("click", () => {
                              selectedItem = { ...card.dataset };
                              modalTitle.textContent = selectedItem.name || "";
                              modalDesc.textContent = selectedItem.price
                                    ? "Price: ₱" + selectedItem.price
                                    : "";
                              qtyValue.value = 1;
                              if (selectedItem.type === "drink" && sizeRow)
                                    sizeRow.style.display = "block";
                              else if (sizeRow) sizeRow.style.display = "none";
                              openModal(modalOverlay);
                        });
                  });

                  document
                        .getElementById("qtyMinus")
                        ?.addEventListener("click", () => {
                              if (+qtyValue.value > 1)
                                    qtyValue.value = +qtyValue.value - 1;
                        });
                  document
                        .getElementById("qtyPlus")
                        ?.addEventListener(
                              "click",
                              () => (qtyValue.value = +qtyValue.value + 1)
                        );
                  document
                        .getElementById("closeModal")
                        ?.addEventListener("click", () =>
                              closeModal(modalOverlay)
                        );

                  document
                        .querySelectorAll(".size-options button")
                        .forEach((btn) => {
                              btn.addEventListener("click", () => {
                                    document
                                          .querySelector(
                                                ".size-options .active"
                                          )
                                          ?.classList.remove("active");
                                    btn.classList.add("active");
                                    const size = btn.dataset.size;
                                    const cardImage = document.querySelector(
                                          ".menu-card[data-name='" +
                                                selectedItem.name +
                                                "'] .menu-img img"
                                    );
                                    if (
                                          selectedItem["img-" + size] &&
                                          cardImage
                                    )
                                          cardImage.src =
                                                selectedItem["img-" + size];
                              });
                        });

                  document
                        .getElementById("confirmOrder")
                        ?.addEventListener("click", () => {
                              const sizeText =
                                    selectedItem.type === "drink"
                                          ? document.querySelector(
                                                  ".size-options .active"
                                            )?.dataset.size || ""
                                          : "";
                              alert(
                                    `Added to cart:\n${
                                          selectedItem.name || ""
                                    }\nQty: ${qtyValue.value}${
                                          sizeText ? "\nSize: " + sizeText : ""
                                    }`
                              );
                              closeModal(modalOverlay);
                        });
            }

            addCartBtn?.addEventListener("click", () => {
                  if (!selected) return alert("No item selected");
                  // use the global cart API (available across pages)
                  if (typeof window.addToCart === "function")
                        window.addToCart(selected, qty);
                  closeModal(simpleModalOverlay);
                  if (typeof window.openCartSidebar === "function")
                        window.openCartSidebar();
            });

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
