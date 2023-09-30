
document.addEventListener("DOMContentLoaded", function () {
    const accordionItems = document.querySelectorAll(".accordion-item");

    accordionItems.forEach((item) => {
        const button = item.querySelector(".accordion-button");
        const content = item.querySelector(".accordion-content");

        button.addEventListener("click", () => {
            // Toggle class 'active' untuk menampilkan atau menyembunyikan konten
            content.classList.toggle("active");

            // Tutup semua bagian accordion lainnya
            accordionItems.forEach((otherItem) => {
                if (otherItem !== item) {
                    otherItem.querySelector(".accordion-content").classList.remove("active");
                }
            });
        });
    });
});
