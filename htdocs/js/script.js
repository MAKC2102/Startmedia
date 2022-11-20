import getData from "./modules/data.js";
import {getSortDefault, getSort} from "./modules/sort.js"
import renderTable from "./modules/render.js";

let td = getData(data);

getSortDefault(td);

document.getElementById("sort").onclick = (e) => {
    e.target.textContent = getSort(td, e.target.textContent)[1];
    renderTable(td);
}

renderTable(td);