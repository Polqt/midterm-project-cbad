// Array of text items to display in the scroll
const textItems = [
    "Jepoyqt",
    "Freelancer",
    "Software Engineer",
    "Data Engineer",
    "AI Engineer"
];

const populateScrollingText = () => {
    const scrollTextDivs = document.querySelectorAll('.scroll-text');

    scrollTextDivs.forEach(div => {
        textItems.forEach(item => {
            const span = document.createElement("span");
            span.textContent = item; 
            span.style.margin = "0 1rem"; 
            div.appendChild(span); 
        });
    });
}

populateScrollingText();
