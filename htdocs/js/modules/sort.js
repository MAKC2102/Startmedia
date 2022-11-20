//изначальная сортировка

export function getSortDefault(td) {
    td.sort((a, b) => b.sum - a.sum);
}

//выбор сортировки по кнопе
export function getSort(td, e) {
    console.log(e)
    e = e === 'Сортировка по отдельным заездам' ? 'Сортировка по итоговому результату' : 'Сортировка по отдельным заездам';
    if (e === 'Сортировка по итоговому результату') {
        td.sort((a, b) => Math.max(...b.result) - Math.max(...a.result));
        document.getElementsByTagName("tbody")[0].innerHTML = '';
    } else {
        td.sort((a, b) => b.sum - a.sum);
        document.getElementsByTagName("tbody")[0].innerHTML = '';
    }
    return [td, e];
}