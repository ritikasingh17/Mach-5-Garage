
document.addEventListener('DOMContentLoaded', () => {
    const hexagons = document.querySelectorAll('.hexagon');



   
    const employeeHexagon = document.getElementById('employee-hexagon');
    if (employeeHexagon) {
        employeeHexagon.addEventListener('click', () => {
            window.location.href = 'inputEmployees.html';
        });
    }

    const mechanicOrdersHexagon = document.getElementById('mechanicOrders-hexagon');
    if(mechanicOrdersHexagon)
    {
        mechanicOrdersHexagon.addEventListener('click', () => {
            window.location.href = 'mechanicOrders.html';
        });
    }

    const carsHexagon = document.getElementById('cars-hexagon');
    if(carsHexagon)
    {
        carsHexagon.addEventListener('click', () => {
            window.location.href = 'inputCars.html';
        });
    }

    const paymentsHexagon = document.getElementById('payments-hexagon');
    if(paymentsHexagon)
    {
        paymentsHexagon.addEventListener('click', () => {
            window.location.href = 'inputPayments.html';
        });
    }

    const logoutHexagon = document.getElementById('logout-hexagon');
    if(logoutHexagon)
    {
        logoutHexagon.addEventListener('click', () => {
            window.location.href = 'index.html';
        });
    }
});

// Function to expand the badge on mouse enter
function expandBadge() {
    const badge = document.querySelector('.recaptcha-badge');
    const link = badge.querySelector('.recaptcha-link');
    badge.style.width = '150px'; // Expanded width
    link.style.display = 'block'; // Show the link
}

// Function to collapse the badge on mouse leave
function collapseBadge() {
    const badge = document.querySelector('.recaptcha-badge');
    const link = badge.querySelector('.recaptcha-link');
    badge.style.width = '40px'; // Collapsed width
    link.style.display = 'none'; // Hide the link
}

// Event listeners for the badge hover effect
document.addEventListener('DOMContentLoaded', function() {
    const badge = document.querySelector('.recaptcha-badge');
    badge.addEventListener('mouseenter', expandBadge);
    badge.addEventListener('mouseleave', collapseBadge);
});