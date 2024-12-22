document.addEventListener("DOMContentLoaded", () => {
    // Attach event listeners to all navigation buttons
    document.querySelectorAll(".prev, .next").forEach((button) => {
        button.addEventListener("click", (event) => {
            const card = event.target.closest(".card-images");
            if (!card) return;

            const direction = button.classList.contains("next") ? 1 : -1;
            switchImage(card, direction);
        });
    });

    // Initialize the counter for all cards
    document.querySelectorAll(".card-images").forEach((card) => {
        const imageElement = card.querySelector("img.w-full");
        const counterElement = card.querySelector(".counter-view");
        const images = JSON.parse(imageElement.dataset.images || "[]");
        if (images.length) {
            imageElement.dataset.currentIndex = 0;
            counterElement.textContent = `1/${images.length}`;
        }
    });
});

function switchImage(card, direction) {
    const imageElement = card.querySelector("img.w-full");
    const counterElement = card.querySelector(".counter-view");
    const images = JSON.parse(imageElement.dataset.images || "[]");
    if (!images.length) return;

    // Calculate the new index
    const currentIndex = parseInt(imageElement.dataset.currentIndex, 10) || 0;
    const nextIndex =
        (currentIndex + direction + images.length) % images.length;

    // Update the image and counter
    imageElement.src = images[nextIndex];
    imageElement.dataset.currentIndex = nextIndex;
    counterElement.textContent = `${nextIndex + 1}/${images.length}`;
}
