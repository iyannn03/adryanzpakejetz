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
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: [
            {
                title: 'Coffee Brewing Workshop',
                start: '2024-10-22'
            },
            {
                title: 'Live Music Night',
                start: '2024-10-28'
            }
        ]
    });

    calendar.render();
});