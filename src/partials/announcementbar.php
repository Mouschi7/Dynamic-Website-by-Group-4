<div id="announcement-bar" class="announcement-bar visible">
      <div class="announcement-content">
      🎉 Limited Time Offer: Get 20% Off Your First Order!
      </div>
      <button class="announcement-close">&times;</button>
</div>

<script>
      document.addEventListener("DOMContentLoaded", function() {
            const closeBtn = document.querySelector(".announcement-close");
            const bar = document.getElementById("announcement-bar");
        
            closeBtn.addEventListener("click", () => {
            bar.classList.remove("visible");
            bar.classList.add("hidden");
            document.querySelector(".navbar").classList.add("announcement-hidden");
            });
      });
</script>
