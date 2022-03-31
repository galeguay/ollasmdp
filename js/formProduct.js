'use strict'
const ApiURL = 'api/products';

const responseDiv = document.querySelector("#responseDiv");
const submitBtn =  document.querySelector("#submit-btn");

let formProductElement = document.querySelector("#formProduct");
formProductElement.addEventListener("submit", e => {
    e.preventDefault();
    let formData = new FormData(formProductElement);
    if (!responseDiv.classList.contains("collapse"))
        responseDiv.classList.toggle("collapse");
    saveProduct(formData);
})

async function saveProduct(formData) {
    try {
        submitBtn.innerHTML = `
            <div class="spinner-border text-light" role="status">
            </div>
            `;
        let res = await fetch(ApiURL, {
            method: 'POST',
            body: formData
        });
        let resText = await res.json();
        if (res.ok) {
            formProduct.reset();
            submitBtn.innerHTML = `Cargar`;
            responseDiv.innerHTML = resText;
            responseDiv.classList.toggle("collapse");
            responseDiv.classList.add("bg-success", "mx-auto");
        }else{
            submitBtn.innerHTML = `Cargar`;
            responseDiv.innerHTML = resText;
            responseDiv.classList.toggle("collapse");
            responseDiv.classList.add("bg-danger", "mx-auto");
        }
    } catch (error) {
        console.log(error);
    }
}