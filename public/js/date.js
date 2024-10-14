const updateDateTime = () => {
    const dateElement = document.getElementById('current-date');
    const timeElement = document.getElementById('current-time');

    // Get the current date
    const now = new Date();

    // Format date as YYYY/MM/DD
    const formattedDate = now.getFullYear() + '/' +
        String(now.getMonth() + 1).padStart(2, '0') + '/' +
        String(now.getDate()).padStart(2, '0');

    // Format time as HH:MM:SS (12-hour format)
    const hours = now.getHours();
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    const formattedTime = (hours % 12 || 12) + ':' + minutes + ':' + seconds;

    dateElement.textContent = formattedDate;
    timeElement.textContent = formattedTime;
}

updateDateTime();
setInterval(updateDateTime, 1000);
