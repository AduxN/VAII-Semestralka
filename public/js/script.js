function validateArticle() {
    let title = document.forms['newarticleform']['title'].value;
    let desc = document.forms['newarticleform']['description'].value;
    let par1 = document.forms['newarticleform']['paragraph1'].value;
    let par2 = document.forms['newarticleform']['paragraph2'].value;
    let par3 = document.forms['newarticleform']['paragraph3'].value;
    let par4 = document.forms['newarticleform']['paragraph4'].value;
    let imageSrc = document.forms['newarticleform']['imageSrc'].value;
    let imageAlt = document.forms['newarticleform']['imageAlt'].value;

    if (title === "") {
        alert("Názov musí byť zadaný");
        return false;
    }
    if (title.length > 255) {
        alert("Názov je príliš dlhý");
        return false;
    }
    if (desc === "") {
        alert("Popis musí byť zadaný");
        return false;
    }
    if (desc.length > 1000) {
        alert("Popis je príliš dlhý");
        return false;
    }
    if (par1 === "") {
        alert("Prvý odsek musí byť zadaný");
        return false;
    }
    if (par1.length > 2000 || par2.length > 2000 || par3.length > 2000 || par4.length > 2000) {
        alert("Minimálne jeden z odsekov je príliš dlhý");
        return false;
    }
    if (imageSrc.length > 2000 || imageAlt.length > 30) {
        alert("Minimálne jeden z údajov o obrázku je príliš dlhý");
        return false;
    }
    return true;
}

function validatePost() {
    let title = document.forms['newpostform']['title'].value;
    let desc = document.forms['newpostform']['description'].value;
    let summ = document.forms['newpostform']['summ'].value;
    let cont = document.forms['newpostform']['content'].value;

    if (title === "") {
        alert("Názov musí byť zadaný");
        return false;
    }
    if (title.length > 255) {
        alert("Názov je príliš dlhý");
        return false;
    }
    if (desc === "") {
        alert("Popis musí byť zadaný");
        return false;
    }
    if (desc.length > 1000) {
        alert("Popis je príliš dlhý");
        return false;
    }
    if (summ === "") {
        alert("Zhrnutie musí byť zadané");
        return false;
    }
    if (summ.length > 1000) {
        alert("Zhrnutie je príliš dlhé");
        return false;
    }
    if (cont === "") {
        alert("Link na obsah musí byť zadaný");
        return false;
    }
    if (cont.length > 1000) {
        alert("Link na obsah je príliš dlhý");
        return false;
    }
    return true;
}

function validateHW() {
    let title = document.forms['newarticleform']['title'].value;
    let desc = document.forms['newarticleform']['description'].value;
    let par1 = document.forms['newarticleform']['paragraph1'].value;
    let par2 = document.forms['newarticleform']['paragraph2'].value;
    let imageSrc = document.forms['newarticleform']['imageSrc'].value;
    let imageAlt = document.forms['newarticleform']['imageAlt'].value;

    if (title === "") {
        alert("Názov musí byť zadaný");
        return false;
    }
    if (title.length > 255) {
        alert("Názov je príliš dlhý");
        return false;
    }
    if (desc === "") {
        alert("Popis musí byť zadaný");
        return false;
    }
    if (desc.length > 1000) {
        alert("Popis je príliš dlhý");
        return false;
    }
    if (par1.length > 2000 || par2.length > 2000) {
        alert("Minimálne jeden z odsekov je príliš dlhý");
        return false;
    }
    if (imageSrc.length > 2000 || imageAlt.length > 30) {
        alert("Minimálne jeden z údajov o obrázku je príliš dlhý");
        return false;
    }
    return true;
}

function hamburgerMenu() {
    let links = document.getElementById("links");
    let btns = document.getElementById("btns");

    if (links.style.display === "flex" && btns.style.display === "flex") {
        links.style.display = "none";
        btns.style.display = "none";
    } else {
        links.style.display = "flex";
        btns.style.display = "flex";
    }
}

function resizeRefresh() {
    let links = document.getElementById("links");
    let btns = document.getElementById("btns");
    let viewportWidth = window.innerWidth;

    if (viewportWidth > 600 && links.style.display === "none" && btns.style.display === "none") {
        links.style.display = "flex";
        btns.style.display = "flex";
    } else if (viewportWidth < 601 && links.style.display === "flex" && btns.style.display === "flex") {
        links.style.display = "none";
        btns.style.display = "none";
    }
}

//TODO: AJAX - needs updates
const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('input', getArticles);

async function getArticles() {
    // Send a request to the PHP script to get the articles from the database
    const response = await fetch('https://example.com/get-articles.php');
    const articles = await response.json();

    // Filter the articles based on the search term
    const searchTerm = searchInput.value;
    const filteredArticles = articles.filter(article => article.title.includes(searchTerm));

    // Display the filtered articles
    displayArticles(filteredArticles);
}

function displayArticles(articles) {
    // Clear the existing articles
    document.getElementById('articles').innerHTML = '';

    // Add the filtered articles to the page
    for (const article of articles) {
        const articleElement = document.createElement('div');
        articleElement.innerHTML = `<h2>${article.title}</h2><p>${article.content}</p>`;
        document.getElementById('articles').appendChild(articleElement);
    }
}
