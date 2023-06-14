document.addEventListener("DOMContentLoaded", function () {
    var addButtonList = document.querySelectorAll(".btn-success");
    var totalValue = 0;

    if (addButtonList.length > 0) {
        addButtonList.forEach(function (button) {
            button.addEventListener("click", function () {
                var price = parseFloat(
                    this.previousElementSibling.textContent
                        .replace("R$", "")
                        .replace(",", ".")
                );

                totalValue += price;

                var totalElement = document.querySelector(".col.text-right p");

                totalElement.textContent = "R$" + totalValue.toFixed(2);
            });
        });
    }

    var finalizarButton = document.querySelector(
        ".btn-success.finalizar-button"
    );

    if (finalizarButton) {
        finalizarButton.addEventListener("click", function () {
            var totalElement = document.querySelector(".col.text-right p");

            var totalValue = totalElement.textContent.trim();

            if (totalValue.startsWith("R$")) {
                totalValue = totalValue.substring(2);
            }

            totalValue = parseFloat(totalValue);

            if (!isNaN(totalValue)) {
                alert(
                    "Compra no valor " +
                        totalValue.toFixed(2) +
                        " efetuada com sucesso."
                );
            } else {
                alert("Valor total inválido.");
            }
        });
    }
});
