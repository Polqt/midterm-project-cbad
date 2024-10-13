let inactivityTimeout;

const resetInactivityTimer = () => {
    clearTimeout(inactivityTimeout);

    inactivityTimeout = setTimeout(() => {
        navigator.sendBeacon('end_session.php');
        window.location.href = 'index.php';
    }, 600000); // 1 minute
}

window.addEventListener('mousemove', resetInactivityTimer);
window.addEventListener('keydown', resetInactivityTimer);
window.addEventListener('click', resetInactivityTimer);
window.addEventListener('scroll', resetInactivityTimer);

resetInactivityTimer();


window.addEventListener('beforeunload', function (event) {
    const nextUrl = event.target.activeElement?.href;

    if (nextUrl && nextUrl.startsWith(window.location.origin)) {
        return;
    }
    navigator.sendBeacon('end_session.php');
});
