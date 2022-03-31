'use strict'
const ApiURL = 'api/lines';

let formLine = document.querySelector("#formLine");
formLine.addEventListener("submit", e=>{
    e.preventDefault();
    let formData = new FormData(formLine);
    let line ={
        name: formData.get("nameInput"),
        color: formData.get("colorInput")
    }
    saveLine(line);
})

async function saveLine(line) {
    try {
        let response = await fetch(ApiURL,{
            method: 'POST',
            headers: {'Content-Type':'application/json'},
            body: JSON.stringify(line)
        });
        if (response.ok){
            formLine.reset();
        }
    } catch (error) {
        console.log(error);
    }
}