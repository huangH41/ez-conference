document.getElementById('hamburger').addEventListener('click', () => {
    document.getElementById('sidebar').classList.add('sidebar-active');
    document.getElementById('overlay').classList.add('d-block');
});
document.getElementById('overlay').addEventListener('click', () => {
    document.getElementById('sidebar').classList.remove('sidebar-active');
    document.getElementById('overlay').classList.remove('d-block');
});
