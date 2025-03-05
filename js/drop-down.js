// drop-down
export  function downDrop() {
(function() {
    const selectElement = document.querySelector("#help");

    selectElement.addEventListener("change", function() {
        document.querySelector("#result")?.remove();

        const resultDiv = document.createElement("div");
        resultDiv.id = "result";
        resultDiv.textContent = `You selected: ${selectElement.value}`;
        document.body.appendChild(resultDiv);
    });
})();
}