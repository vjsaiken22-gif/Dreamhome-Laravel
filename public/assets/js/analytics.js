document.addEventListener("DOMContentLoaded", () => {

    console.log("Analytics system loaded.");

    const cards =
    document.querySelectorAll(".analytics-card");

    cards.forEach(card => {

        card.addEventListener("mouseenter", () => {

            card.style.transform = "translateY(-8px) scale(1.02)";

        });

        card.addEventListener("mouseleave", () => {

            card.style.transform = "translateY(0px) scale(1)";

        });

    });

});