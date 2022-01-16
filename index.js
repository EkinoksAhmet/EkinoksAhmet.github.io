document.getElementById('menuButton').addEventListener("click", () => {
    if (document.getElementById('responsiveMenu').style.display === 'block') {
        document.getElementById('responsiveMenu').style.display = 'none';
    } else if (document.getElementById('responsiveMenu').style.display === 'none') {
        document.getElementById('responsiveMenu').style.display = 'block';
    }
});