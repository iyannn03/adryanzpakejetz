// scripts.js

// Smooth scroll to sections
document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Optional: Add dynamic features like popups or carousel for reviews.
const liveChatHeader = document.querySelector('#live-chat header');
const chatWindow = document.querySelector('.chat');

liveChatHeader.addEventListener('click', () => {
    chatWindow.style.display = chatWindow.style.display === 'block' ? 'none' : 'block';
});