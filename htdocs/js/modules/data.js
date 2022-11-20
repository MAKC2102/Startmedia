//подготовка данных к сортировке

export default function getData(db) {
    let data = [];
    Object.entries(db.cars).forEach((entry) => {
        const [key, value] = entry;
        let sum = 0;
        data.push({'info': `<td><p>${value["name"]}</p></td><td><p>${value["city"]}</p></td><td><p>${value["car"]}</p></td>`});
        data[value["id"] - 1].result = [];
        Object.entries(db.attempts).forEach((elem) => {
            const [index, val] = elem;
            if (value["id"] === val["id"]) {
                sum = sum + val["result"];
                data[value["id"] - 1].result.push(val["result"]);
            }
        })
        data[value["id"] - 1].sum = sum;
    });
    return data;
}