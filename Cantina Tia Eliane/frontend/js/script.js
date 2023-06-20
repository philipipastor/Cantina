document.addEventListener("DOMContentLoaded", function () {
    var addButtonList = document.querySelectorAll(".btn-success");
    var totalValue = 0;
    var totalElement = document.querySelector(".col.text-right p span");

    if (addButtonList.length > 0) {
        addButtonList.forEach(function (button) {
            button.addEventListener("click", function () {
                var price = parseFloat(
                    this.parentElement.querySelector(".card-text span")
                        .textContent
                );

                totalValue += price;

                totalElement.textContent = totalValue.toFixed(2);
            });
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var finalizarButton = document.getElementById("finalizar-button");
    var totalElement = document.querySelector(".col.text-right p span");
    finalizarButton.addEventListener("click", function () {
        var paragraph = document.querySelector("p.h5");

        if (paragraph) {
            totalElement.textContent = "0.00";
            alert("Compra finalizada com sucesso");
        } else {
            alert("É necessário estar logado para comprar");
        }
    });
});
