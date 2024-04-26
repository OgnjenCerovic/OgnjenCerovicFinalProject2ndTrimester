function updatePrice() {
    var selectElement = document.getElementById("pizzaSelect");
    var priceInput = document.getElementById("price");
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var price = selectedOption.getAttribute("data-price");
    priceInput.value = price;

    // Update total price when pizza selection changes
    updateTotalPrice();
}

function updateTotalPrice() {
    var quantity = document.getElementById("quantity").value;
    var price = document.getElementById("price").value;
    var totalPriceInput = document.getElementById("totalPrice");
    var totalPrice = quantity * price;
    totalPriceInput.value = totalPrice.toFixed(2);
}

function addToTable() {
    // Get selected pizza data
    var pizzaSelect = document.getElementById("pizzaSelect");
    var pizzaId = pizzaSelect.value;
    var pizzaName = pizzaSelect.options[pizzaSelect.selectedIndex].text;
    var pizzaPrice = pizzaSelect.options[pizzaSelect.selectedIndex].dataset.price;

    // Get quantity
    var quantityInput = document.getElementById("quantity");
    var quantity = parseInt(quantityInput.value);

    // Calculate total price
    var totalPrice = pizzaPrice * quantity;

    // Create a new row in the table
    var table = document.getElementById("orderTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow();
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);

    // Add data to the new row
    cell1.innerHTML = pizzaName;
    cell2.innerHTML = quantity;
    cell3.innerHTML = totalPrice;

    // Clear input fields after adding to the table
    quantityInput.value = "";
    updateTotalPrice(); // Update total price after adding to the table
}