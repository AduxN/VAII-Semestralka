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
    if (imageSrc.length > 255 || imageAlt.length > 30) {
        alert("Minimálne jeden z údajov o obrázku je príliš dlhý");
        return false;
    }
    return true;
}
