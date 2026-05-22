

const API='http://127.0.0.1:8000/api'


document.addEventListener('DOMContentLoaded', ()=> {
    adatokbetoltese();
    kategoriakBetoltese();
})

function adatokbetoltese(){
    fetch(`${API}/esemenyeks`)
    .then(res => res.json())
        .then(adatok=>{
            tablazatfeltolt(adatok);
        })
        .catch(err => console.log('Hiba az adatok betöltésekor', err))
}

function tablazatfeltolt(adatok){
    const tbody=document.getElementById('alap');
    tbody.innerHTML="";
    adatok.forEach(element=>{
        const sor = document.createElement('tr');
        sor.innerHTML= `
        <td><img src="kepek/${element.id}.jpg" "width="20" onerror="this.src='kepek/1.jpg'" ></td>
        <h2> ${element.esemeny_nev}</h2>
        <p>${element.catfuggveny ? element.catfuggveny.kategoria_nev : element.kategoria_nev}</p>
        <p> ${element.datum}</p>
        <p> ${element.leiras}</p>
        <p> ${element.ar}</p>
        <p> ${element.resztvevok}</p>
        
        `
        tbody.appendChild(sor);
    });

}



function kategoriakBetoltese() {
fetch(`${API}/kategoriaks`)
.then(res => res.json())
.then(kategoriak => {
const select = document.getElementById('kategoriaSelect');
select.innerHTML = '<option value="">kategória</option>';
kategoriak.forEach(kat => {
const option = document.createElement('option');
option.value = kat.id;
option.textContent = kat.kategoria_nev;
select.appendChild(option);
})
})
.catch(err=> console.log('Hiba a kategoriák betöltésekor', err))}