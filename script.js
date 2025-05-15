// Toggle Menu
document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.querySelector(".menu-icon");

    menuIcon.addEventListener("click", function () {
        alert("Menu akan ditambahkan nanti!");
        // Kamu bisa menambahkan toggle class untuk membuka sidebar di sini
    });

    // Fungsi saat tombol beli ditekan
    const beliButtons = document.querySelectorAll("button");
    beliButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {
            const namaProduk = btn.previousElementSibling.previousElementSibling.textContent;
            alert(`Kamu telah memilih ${namaProduk}`);
        });
    });

    // Fungsi simulasi pencarian
    const searchInput = document.querySelector(".search-container input");
    searchInput.addEventListener("keypress", function (e) {
        if (e.key === "Enter") {
            alert(`Mencari: ${searchInput.value}`);
        }
    });
});
