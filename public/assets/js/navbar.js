function showSidebar() {
    document.querySelector("#sidebar").style.width = "100vw";
}

function hideSidebar() {
    document.querySelector("#sidebar").style.width = "0vw";

}

document.querySelector("#burger").addEventListener("click", showSidebar);
document.querySelector("#sidebar-window").addEventListener("click", hideSidebar);