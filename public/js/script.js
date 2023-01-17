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
    } else if (title.length > 255) {
        alert("Názov je príliš dlhý");
        return false;
    }
    if (desc === "") {
        alert("Popis musí byť zadaný");
        return false;
    } else if (desc.length > 1000) {
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
    } else if (title.length > 255) {
        alert("Názov je príliš dlhý");
        return false;
    }
    if (desc === "") {
        alert("Popis musí byť zadaný");
        return false;
    } else if (desc.length > 1000) {
        alert("Popis je príliš dlhý");
        return false;
    }
    if (summ === "") {
        alert("Zhrnutie musí byť zadané");
        return false;
    } else if (summ.length > 1000) {
        alert("Zhrnutie je príliš dlhé");
        return false;
    }
    if (cont === "") {
        alert("Link na obsah musí byť zadaný");
        return false;
    } else if (cont.length > 1000) {
        alert("Link na obsah je príliš dlhý");
        return false;
    }
    return true;
}

function validateEsport() {
    let title = document.forms['newesportform']['title'].value;
    let imageSrc = document.forms['newesportform']['imageSrc'].value;
    let imageAlt = document.forms['newesportform']['imageAlt'].value;
    let text = document.forms['newesportform']['text'].value;

    if (title === "") {
        alert("Názov musí byť zadaný");
        return false;
    } else if (title.length > 255) {
        alert("Názov je príliš dlhý");
        return false;
    }
    if (imageSrc.length > 2000 || imageAlt.length > 30) {
        alert("Minimálne jeden z údajov o obrázku je príliš dlhý");
        return false;
    }
    if (text.length > 5000) {
        alert("Text je príliš dlhý");
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
    } else if (title.length > 255) {
        alert("Názov je príliš dlhý");
        return false;
    }
    if (desc === "") {
        alert("Popis musí byť zadaný");
        return false;
    } else if (desc.length > 1000) {
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

function validateOffer() {
    let title = document.forms['newarticleform']['title'].value;
    let link = document.forms['newarticleform']['link'].value;

    if (title === "") {
        alert("Názov musí byť zadaný");
        return false;
    } else if (title.length > 255) {
        alert("Názov je príliš dlhý");
        return false;
    }
    if (link === "") {
        alert("Link musí byť zadaný");
        return false;
    } else if (link.length > 255) {
        alert("Link je príliš dlhý");
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

async function filterArticles(searchTerm, reviews) {
    // Send a request to the PHP script to get the articles from the database
    let response;
    if (reviews) {
        response = await fetch("?c=reviews&a=reviews");
    } else {
        response = await fetch("?c=hardware&a=hardware");
    }

    const articles = await response.json();

    // Filter the articles based on the search term
    const filteredArticles = articles.filter(article => article.title.toLowerCase().includes(searchTerm.toLowerCase()));

    // Reverse the articles back to original position (from newest to oldest)
    if (searchTerm === "") {
        filteredArticles.reverse();
    }
    // Display the filtered articles
    displayArticles(filteredArticles, reviews);
}

async function sortArticles(asc, reviews) {
    // Send a request to the PHP script to get the articles from the database
    let response;
    if (reviews) {
        response = await fetch("?c=reviews&a=reviews");
    } else {
        response = await fetch("?c=hardware&a=hardware");
    }

    const articles = await response.json();

    // Sort the articles
    const sortedArticles = asc
        ? [...articles].sort((a, b) => a.title.localeCompare(b.title))
        : [...articles].sort((a, b) => b.title.localeCompare(a.title));

    // Display the filtered articles
    displayArticles(sortedArticles, reviews);
}

async function getArticles(reviews) {
    let response;
    if (reviews) {
        response = await fetch("?c=reviews&a=reviews");
    } else {
        response = await fetch("?c=hardware&a=hardware");
    }

    const articles = await response.json();
    // Reverse the articles back to original position (from newest to oldest)
    displayArticles(articles.reverse(), reviews);
}

function displayArticles(articles, reviews) {
    if (reviews) {
        // Clear the existing articles
        document.getElementById('closedReviews').innerHTML = '';

        // Add the filtered articles to the page
        for (const article of articles) {

            const articleElement = document.createElement('article');
            articleElement.classList.add("closedArticle");
            articleElement.innerHTML =
                    `<div class="review_title_div">
                        <a class="review_title" href="?c=reviews&a=article&id=${article.id}">
                            <h2 class="review_title">${article.title}</h2>
                        </a>
                    </div>

                    <img src="${article.imageSrc}" alt="${article.imageAlt}" class="review_img">
                        <p class="review_text">${article.description}</p>`;
            document.getElementById('closedReviews').appendChild(articleElement);
        }
    } else {
        // Clear the existing articles
        document.getElementById('closedHW').innerHTML = '';

        // Add the filtered articles to the page
        for (const article of articles) {
            const articleElement = document.createElement('article');
            articleElement.classList.add("closedArticle");
            articleElement.innerHTML =
                `<div class="hw_title_div">
                        <a class="hw_title" href="?c=hardware&a=article&id=${article.id}">
                            <h2 class="hw_title">${article.title}</h2>
                        </a>
                    </div>

                    <img src="${article.imageSrc}" alt="${article.imageAlt}" class="hw_img">
                        <p class="hw_text">${article.description}</p>`;
            document.getElementById('closedHW').appendChild(articleElement);
        }
    }

}
