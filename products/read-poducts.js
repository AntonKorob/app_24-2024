jQuery($ => {

    // Показать список товаров при первой загрузке
    showProducts();

    // Когда была нажата кнопка «Все товары»
    $(document).on("click", ".read-products-button", function () {
        showProducts();
    });
    // Функция для показа списка товаров
    function showProducts() {
        // Получить список товаров из API
    $.getJSON("http://rest-api/api/product/read.php", data => {

    });
    }


    // Когда была нажата кнопка пагинации
    $(document).on("click", ".pagination li", function () {

        // Получаем JSON URL
        const json_url = $(this).find("a").attr("data-page");

        // Покажем список товаров с пагинацией
        showProducts(json_url);
    });
});



