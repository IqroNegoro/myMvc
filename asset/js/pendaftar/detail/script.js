const background = document.getElementsByClassName("background")[0];
let form = function() {
    background.style.display = "block"
}
const edit = document.getElementById("edit");
edit.addEventListener("click", form)
window.addEventListener("click", e => {
    if (e.target == background) {
        background.style.display = "none";
    }
})