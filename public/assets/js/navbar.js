function showSidebar() {
    document.querySelector("#sidebar").style.left = "0px";
}

function hideSidebar() {
    document.querySelector("#sidebar").style.left = "-100vw";
}

document.querySelector("#burger").addEventListener("click", showSidebar);
document.querySelector("#sidebar-window").addEventListener("click", hideSidebar);