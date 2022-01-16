let form = function() {
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

const searching = document.getElementById("searchInp");
searching.addEventListener("keypress", function(e) {
    let value = this.value;
    
})