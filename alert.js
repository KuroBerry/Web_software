document.addEventListener('DOMContentLoaded', function() {
    const acceptButtons = document.querySelectorAll('.accept');
    const declineButtons = document.querySelectorAll('.decline');

    acceptButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            alert('You have confirmed this order!');
            const panel = button.closest('.panel');
            const buttonContainer = panel.querySelector('.button-container');
            buttonContainer.innerHTML = 'Accepted';
        });
    });

    declineButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            alert('You have canceled this order!');
            const panel = button.closest('.panel');
            panel.style.display = 'none';
        });
    });
});