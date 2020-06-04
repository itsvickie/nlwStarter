// Listar os Estados
function populateUFs(){
    const ufSelected = document.querySelector("select[name=uf]");

    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
    .then( res => res.json() )
    .then( states => {
        for (const state of states){
            ufSelected.innerHTML += `<option value="${state.id}">${state.nome}</option>`;
        }
    });
}

populateUFs();

// Listar as Cidades
function getCities(event){
    const citySelected = document.querySelector("select[name=city]");
    const stateInput = document.querySelector("input[name=state]");

    const ufValue = event.target.value;

    stateInput.value = event.target.options[event.target.selectedIndex].text;

    const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${ufValue}/municipios`;

    citySelected.innerHTML = '<option value>Selecione a Cidade</option>';
    citySelected.disabled = true;

    fetch(url)
    .then( res => res.json() )
    .then( cities => {
        for (const city of cities){
            citySelected.innerHTML += `<option value="${city.nome}">${city.nome}</option>`
        }
        citySelected.disabled = false;
    });
}

// Iniciar a função de Listar Cidades
document
    .querySelector("select[name=uf]")
    .addEventListener("change", getCities)

// Itens de Coleta
const itemsToCollect = document.querySelectorAll(".items-grid li");

for (const item of itemsToCollect){
    item.addEventListener("click", handleSelectedItem);
}

//uma query seletor para encontrar o hidden input com nome items
const collectedItems = document.querySelector("input[name=items]");

//array pra guardar os valores selecionados
let selectedItems = [];

function handleSelectedItem(){
    const itemLi = event.target;
    itemLi.classList.toggle("selected"); //mudar o html com a classe selected (para mudar o visual de click)
    const itemId = itemLi.dataset.id;

    //verificar se existem itens selecionados
    //se sim, pegar os itens selecionados

    const alreadySelected = selectedItems.findIndex( item => {
        const itemFound = item == itemId
        return itemFound //Se o item recebido for falso, ele vai ficar repetindo
    });

    // se já estiver selecionado, tirar da seleção
    if(alreadySelected >= 0){
        const filteredItems = selectedItems.filter( item => {
            const itemIsDifferent = item != itemId
            return itemIsDifferent
        });
        selectedItems = filteredItems;
    } else { //se não estiver selecionado
        selectedItems.push(itemId);
    }

    //setar o value dos itens coletados no input hidden para os itens selecionados conforme logica
    collectedItems.value = selectedItems;
}