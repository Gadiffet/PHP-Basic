function validationInput() {
    let id = event.target.id
    let idInput = '#' + id
    console.log(idInput)
    let idErreur = idInput + "Validation"
    let input = document.querySelector(idInput)
    let value = input.value;

    //On verifie qu'il y a que des lettres, et on supprimer les espaces de la verification
    let trimmed = value.trim();
    let letters = /^[a-zA-ZÀ-ú\- ]+$/;
    if (input === age) {
        letters = /^[0-9]+$/;
    }
    if (trimmed.match(letters)) {
        input.dataset.state = '';
        document.querySelector(idErreur).innerHTML = "";
        document.querySelector(idErreur).setAttribute("value", "true")
    } else {
        input.dataset.state = 'invalid';
        document.querySelector(idErreur).innerHTML = "Veuillez indiquer un " + id + " valide.";
        document.querySelector(idErreur).setAttribute("value", "false")
    }
    if (input === age && 18 > trimmed || trimmed > 80){
        input.dataset.state = 'invalid';
        document.querySelector(idErreur).innerHTML = "Vous devez avoir entre 18 et 80 ans";
        document.querySelector(idErreur).setAttribute("value", "false")
    }
}

function validationFormulaire(){
    if (document.querySelectorAll("div[value=\"false\"]")[0])
    {
        setTimeout(function redirection() {
            window.location.href='../fail/index.php';
        },1);
        alert("Formulaire Incorrect");
    }
}