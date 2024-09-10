// Get all links in the sidebar
const links = document.querySelectorAll('.sidebar ul li a');

// Add click event listener to each link
links.forEach(link => {
    link.addEventListener('click', function() {
        // Remove 'active' class from all links
        links.forEach(l => l.classList.remove('active'));

        // Add 'active' class to the clicked link
        this.classList.add('active');
    });
});
