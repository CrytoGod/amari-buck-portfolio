
// productCards
export  function moveProducts() {
(function () {
    function isPage(page) {
        return window.location.pathname.includes(page);
    }
  
    function enableAutoSlide() {
        const row = document.querySelector(".row");
        if (!row) return;
  
        let scrollAmount = 0, direction = 1;
        const scrollStep = 2, scrollInterval = 30;
  
        setInterval(() => {
            scrollAmount += scrollStep * direction;
            row.scrollLeft = scrollAmount;
  
            if (scrollAmount <= 0 || scrollAmount >= row.scrollWidth - row.clientWidth) {
                direction *= -1;
            }
        }, scrollInterval);
    }
  
    if (document.querySelector(".row") || isPage("index.php") || isPage("detail.php")) {
        enableAutoSlide();
    }
  })();

}