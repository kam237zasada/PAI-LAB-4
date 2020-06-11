let lukas = document.getElementById('liczbylucasa');
let pierwsze = document.getElementById('liczbypierwsze');
let rozklad = document.getElementById('rozklad');
let informacje = document.getElementById('informacje');

function showItem(name) {
    switch (name) {
        case "liczbylucasa":
            lukas.style.display="flex";
            pierwsze.style.display="none";
            rozklad.style.display="none";
            informacje.style.display="none"
            break;
        case "liczbypierwsze":
            lukas.style.display="none";
            pierwsze.style.display="flex";
            rozklad.style.display="none";
            informacje.style.display="none"
            break;
        case "rozklad":
            lukas.style.display="none";
            pierwsze.style.display="none";
            rozklad.style.display="flex";
            informacje.style.display="none"
            break;
        case "informacje":
            lukas.style.display="none";
            pierwsze.style.display="none";
            rozklad.style.display="none";
            informacje.style.display="flex"
            break;
        default:
            break;
    }
}

function setProcent(value) {
    let element = document.getElementById("procent");
    return element.innerHTML = value + "%";
}