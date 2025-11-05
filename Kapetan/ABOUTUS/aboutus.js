document.addEventListener("DOMContentLoaded", () => {
    const boxes = document.querySelectorAll(".info-box");

    boxes.forEach(box => {
        box.addEventListener("click", () => {
            // Close other boxes first
            boxes.forEach(b => {
                if (b !== box) b.classList.remove("active");
            });

            // Toggle current box
            box.classList.toggle("active");
        });
    });
});
