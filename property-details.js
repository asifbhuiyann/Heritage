    const priceLow = document.getElementById("priceLow");
    const priceHigh = document.getElementById("priceHigh");
    const priceSlider = document.getElementById("priceSlider");

    priceSlider.addEventListener("input", function () {
    const value = parseInt(priceSlider.value);
    priceLow.textContent = `$ ${value.toLocaleString()}k`;
    priceHigh.textContent = `$ ${(value + 25000).toLocaleString()}k`;
    });
