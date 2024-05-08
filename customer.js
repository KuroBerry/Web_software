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
            const panel = button.closest('.panel');
            panel.style.display = 'none';
            const confirmMessage = 'Back to Order?';
            const shouldGoBack = confirm(confirmMessage);

            if (shouldGoBack) {
                window.location.href = 'order_management.php';
            }
        });
    });
});