let form = function () {
    background.style.display = "block"
}
const background = document.getElementsByClassName("background")[0];
const tambah = document.getElementsByClassName("tambah")[0];
tambah.addEventListener("click", form)
window.addEventListener("click", e => {
    if (e.target == background) {
        background.style.display = "none";
    }
})

const forms = document.getElementById("searchInp");
const id = document.getElementById("keyword")
forms.addEventListener("keyup", e => {
    let value = id.value;
    let data = new FormData(forms);
    postData(data)
})

const table = document.getElementById("tbody");

function render(data) {
    let value = data.data;
    let text = "";
    value.forEach(val => {
        text += `
            <tr>
                <td>
                    ${val.id}
                </td>
                <td>
                <a href="http://localhost/myMvc/pendaftar/detail/${val.id}/${val.nama}">
                    <img src="http://localhost/myMvc/asset/img/${val.profile} ?>" alt="">
                </a>
                </td>
                <td>
                <a href="http://localhost/myMvc/pendaftar/detail/${val.id}/${val.nama}">
                    ${val.nama}
                </a>
                </td>
                <td>
                    ${val.email}
                </td>
                <td>
                    ${val.jurusan}
                </td>
            </tr>
        `
    })
    table.innerHTML = text;
}

async function postData(data) {
    const resp = await fetch("http://localhost/myMvc/pendaftar/search", {
        method: "POST",
        body: data
    }).then(resp => resp.json()).then(resp => render(resp))
}