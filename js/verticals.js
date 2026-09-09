/* Accordions — ensure only one <details> is open at a time within each group
   (fallback for browsers without native exclusive <details name>). */
(function () {
    function wire(selector) {
        var items = document.querySelectorAll(selector);
        if (!items.length) return;
        items.forEach(function (item) {
            item.addEventListener('toggle', function () {
                if (!item.open) return;
                items.forEach(function (other) { if (other !== item) other.open = false; });
            });
        });
    }
    wire('.vacc .vitem');   // verticals
    wire('.chacc .chitem'); // ad formats
})();
