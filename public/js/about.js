//Currently nga naay ko knowledge kag ginagamit ko mag build ug projects.
const techStack = [
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original-wordmark.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/express/express-original.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-original.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/go/go-original.svg",
    "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postman/postman-original.svg"
];

const scrollingTechStack = () => {
    const scrollTextDivs = document.querySelectorAll('.scroll-text');

    // Populate the scroll text divs with tech stack images
    scrollTextDivs.forEach(div => {
        techStack.forEach(imageUrl => {
            const img = document.createElement("img");
            img.src = imageUrl; 
            img.width = 45; 
            img.height = 50;
            img.style.margin = "0 1rem"; 
            div.appendChild(img); 
        });
    });
}

scrollingTechStack();

const certifications = [
    {
        link: "https://www.credential.net/09a78d79-c6e1-43e6-9012-cad437e2b2b3#gs.gmitei",
        imgSrc: "https://s3.us-east-1.amazonaws.com/accredible-api-templates/1664396874798783688965298801744.png"
    },
    {
        link: "https://www.coursera.org/account/accomplishments/specialization/K35KTHZ3LCML",
        imgSrc: "https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/google/google-original.svg"
    },
    {
        link: "https://www.freecodecamp.org/certification",
        imgSrc: "https://design-style-guide.freecodecamp.org/img/fcc_primary_small.svg"
    }
];

let currentIndex = 0;

const updateCertification = () => {
    const container = document.getElementById("certification-container").querySelector("a");
    const image = document.getElementById("certification-image");

    container.href = certifications[currentIndex].link;
    image.src = certifications[currentIndex].imgSrc;
}

const nextImage = () => {
    currentIndex = (currentIndex + 1) % certifications.length; 
    updateCertification();
}

const prevImage = () => {
    currentIndex = (currentIndex - 1 + certifications.length) % certifications.length; 
    updateCertification();
}

updateCertification();
