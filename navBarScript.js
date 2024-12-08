document.addEventListener('DOMContentLoaded', (event) => {
    let currentPath = window.location.pathname;
    let navLinks = document.querySelectorAll('#navBar a');
    console.log('Current Path:', currentPath);

    navLinks.forEach(link => {
        let linkPath = new URL(link.href).pathname;
         console.log('Link Path:', linkPath);
        if (linkPath === currentPath) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});