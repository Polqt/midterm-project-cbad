const config = {
    items: ["Student", "Developer", "Freelancer", "Writer", "Hustler"],
    typingSpeed: 100,
    deletingSpeed: 50,
    delayBeforeTyping: 1000,
    delayBeforeDeleting: 2000,
    cursorBlinkRate: 500
};

let currentItemIndex = 0;
let currentText = '';
let isDeleting = false;
let typingTimeout = null;
let cursorInterval = null;

const type = (typedElement) => {
    const currentItem = config.items[currentItemIndex];
    const targetLength = isDeleting ? 0 : currentItem.length;

    if (isDeleting) {
        currentText = currentItem.slice(0, currentText.length - 1);
    } else {
        currentText = currentItem.slice(0, currentText.length + 1);
    }

    updateText(typedElement);

    let typeSpeed = isDeleting ? config.deletingSpeed : config.typingSpeed;

    if (currentText.length === targetLength) {
        if (isDeleting) {
            currentItemIndex = (currentItemIndex + 1) % config.items.length;
            typeSpeed = config.delayBeforeTyping;
        } else {
            typeSpeed = config.delayBeforeDeleting;
        }
        isDeleting = !isDeleting;
    }

    typingTimeout = setTimeout(() => type(typedElement), typeSpeed);
}

const updateText = (typedElement) => {
    typedElement.innerHTML = `${currentText}<span class="cursor">|</span>`;
}

const startCursorBlink = (typedElement) => {
    cursorInterval = setInterval(() => {
        const cursor = typedElement.querySelector('.cursor');
        if (cursor) {
            cursor.style.opacity = cursor.style.opacity === '0' ? '1' : '0';
        }
    }, config.cursorBlinkRate);
}

const startTypingAnimation = () => {
    const typedElement = document.getElementById('typed');
    if (typedElement) {
        type(typedElement);
        startCursorBlink(typedElement);
    } else {
        console.error('Required element not found. Check your HTML ID.');
    }
}

const stopTypingAnimation = () => {
    clearTimeout(typingTimeout);
    clearInterval(cursorInterval);
}

document.addEventListener('DOMContentLoaded', () => {
    startTypingAnimation();
});

// Kontaks ni Jepoy 
document.getElementById('call').addEventListener('click', function (e) {
    e.preventDefault();
    const subject = encodeURIComponent('Schedule a Call');
    const body = encodeURIComponent('I would like to schedule a call with you.');
    window.location.href = `mailto:poyhidalgo@gmail.com?subject=${subject}&body=${body}`;
});

document.getElementById('email').addEventListener('click', function (e) {
    e.preventDefault();
    const subject = encodeURIComponent('New Email');
    const body = encodeURIComponent('Hello,\n\nI wanted to reach out about...');
    const mailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=poyhidalgo@gmail.com&su=${subject}&body=${body}`;
    window.open(mailUrl, '_blank');
});

document.getElementById('chat').addEventListener('click', function (e) {
    e.preventDefault();
    const subject = encodeURIComponent('Quick Chat');
    const body = encodeURIComponent('Hi,\n\nI wanted to start a quick chat about...');
    const mailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=poyhidalgo@gmail.com&su=${subject}&body=${body}`;
    window.open(mailUrl, '_blank'); 
});
