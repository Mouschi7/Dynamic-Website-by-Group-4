//SPECIALS

document.addEventListener("DOMContentLoaded", function () {
      const slides = document.querySelectorAll(".special-slide");
      const indicators = document.querySelectorAll(
            ".specials-indicators .indicator"
      );
      const nextBtn = document.getElementById("nextSpecialBtn");
      const prevBtn = document.getElementById("prevSpecialBtn");
      const slider = document.querySelector(".specials-slider");
      let current = 0;

      function showSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;
            slider.style.transform = `translateX(-${index * 100}%)`;
            indicators[current].classList.remove("active");
            indicators[index].classList.add("active");
            current = index;
      }

      function nextSlide() {
            showSlide(current + 1);
      }
      function prevSlide() {
            showSlide(current - 1);
      }

      nextBtn.addEventListener("click", nextSlide);
      prevBtn.addEventListener("click", prevSlide);
      indicators.forEach((btn, i) =>
            btn.addEventListener("click", () => showSlide(i))
      );

      setInterval(nextSlide, 5000);

      document.addEventListener("keydown", (e) => {
            if (e.key === "ArrowLeft") prevSlide();
            if (e.key === "ArrowRight") nextSlide();
      });
});

//MENU
document.querySelectorAll(".menu-categories button").forEach((btn) => {
      btn.onclick = () => {
            document
                  .querySelector(".menu-categories .active")
                  ?.classList.remove("active");
            btn.classList.add("active");
            document
                  .getElementById(btn.dataset.target)
                  .scrollIntoView({ behavior: "smooth" });
      };
});

const modalOverlay = document.getElementById("modalOverlay");
const modalTitle = document.getElementById("modalTitle");
const modalDesc = document.getElementById("modalDesc");
const qtyValue = document.getElementById("qtyValue");
const sizeRow = document.getElementById("sizeRow");

let selectedItem = {};

document.querySelectorAll(".menu-card").forEach((card) => {
      card.onclick = () => {
            selectedItem = { ...card.dataset };

            modalTitle.textContent = selectedItem.name;
            modalDesc.textContent = "Price: ₱" + selectedItem.price;

            qtyValue.value = 1;

            if (selectedItem.type === "drink") {
                  sizeRow.style.display = "block";
            } else {
                  sizeRow.style.display = "none";
            }

            modalOverlay.style.display = "flex";
      };
});

document.getElementById("qtyMinus").onclick = () => {
      if (qtyValue.value > 1) qtyValue.value--;
};

document.getElementById("qtyPlus").onclick = () => {
      qtyValue.value++;
};

document.getElementById("closeModal").onclick = () => {
      modalOverlay.style.display = "none";
};

document.querySelectorAll(".size-options button").forEach((btn) => {
      btn.onclick = () => {
            document
                  .querySelector(".size-options .active")
                  ?.classList.remove("active");
            btn.classList.add("active");

            const size = btn.dataset.size;
            const cardImage = document.querySelector(
                  ".menu-card[data-name='" +
                        selectedItem.name +
                        "'] .menu-img img"
            );

            if (selectedItem["img-" + size]) {
                  cardImage.src = selectedItem["img-" + size];
            }
      };
});

document.getElementById("confirmOrder").onclick = () => {
      alert(
            "Added to cart:\n" +
                  selectedItem.name +
                  "\n" +
                  "Qty: " +
                  qtyValue.value +
                  (selectedItem.type === "drink"
                        ? "\nSize: " +
                          document.querySelector(".size-options .active")
                                .dataset.size
                        : "")
      );

      modalOverlay.style.display = "none";
};
