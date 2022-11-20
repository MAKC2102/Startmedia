//отрисовка строк таблицы

export default function renderTable(td) {
    Object.entries(td).forEach((entry) => {
        let tr = document.createElement("tr");
        const [key, render] = entry;
        let res = '';
        render.result.forEach((result) => {
            res = res + `<td><p>${result}</p></td>`;
        });
        tr.innerHTML = render.info + res + `<td><p>${render.sum}</p></td>`
        document.getElementsByTagName("tbody")[0].append(tr)
    });
}