function showSidebar(){
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'flex';
    }

    function hideSidebar(){
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'none';
    }

// Initialize AOS
document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
});

// alert for submit
document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah submit langsung

    alert('Your message has been sent!'); // Tampilkan alert

    this.submit(); // Submit form setelah alert muncul
});

