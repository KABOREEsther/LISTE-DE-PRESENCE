
// let forme = document.getElementById('form');

// function f_valid(event) {
//     event.preventDefault();

//     let nom = document.getElementsByName("nom")[0].value.trim();
//    // var prenom = document.getElementsByName("prenom")[0].value.trim();
//     //var email = document.getElementsByName("email")[0].value.trim();;
//     //var number = document.getElementsByName("number")[0].value.trim();;

//     if (nom === "")// || prenom === "" || email === "" || number === "") {
//         afficherErreur('Veuillez remplir tous les champs');
//         return;
//     }

//    /* if (prenom === "") {
//         afficherErreur("veuillez remplir votre prénom!");
//         return;
//     }

//     if (email === "") {
//         afficherErreur("veuillez remplir votre email!");
//         return;
//     }

//     if (number === "") {
//         afficherErreur("veuillez remplir votre numero!");
//         return;
//     }*/
// //}
// forme.Submit();

// function afficherErreur(message){
//     let erreurElement= document.getElementById("erreur");
//     erreurElement.innerText.message;

// }



let form = document.getElementById('un');

function f_valid(event) {
    event.preventDefault();

    let nom = document.getElementsByName("nom")[0].value.trim();
     let prenom = document.getElementsByName("prenom")[0].value.trim();
    let email = document.getElementsByName("email")[0].value.trim();;
    let number = document.getElementsByName("number")[0].value.trim();;

    if (nom === ""  && prenom === "" && email === "" && number === "") {
        afficherErreur('Veuillez remplir tous les champs');
    return;
}

 if (prenom === "") {
      afficherErreur("veuillez remplir votre prénom!");
      return;
  }

  if (email === "") {
      afficherErreur("veuillez remplir votre email!");
      return;
  }

  if (number === "") {
      afficherErreur("veuillez remplir votre numero!");
      return;
  }
  form.submit();
}


function afficherErreur(message) {
    let erreurElement = document.getElementById("erreur");
    erreurElement.innerText = message;

}

//object formulaire
function soumettre() {
    let formData = new FormData();
    let form=document.getElementById('un');
    formData.append('nom', form.nom.value);
    formData.append('prenom', form.prenom.value);
    formData.append('email', form.email.value);
    formData.append('number', form.number.value);
    formData.append('_token', form._token.value);

    url_site_web="{{URL_to}}"
    //fetch (('http://localhost/laravel-crud')
    fetch("url_site_web + "/save , {
        method: 'Post',
        body:formData
    })
    .then(response=>response.json())
    .then(response=>alert(response))
    .catch(error=> alert("Erreur:"+ error));
}

function formerTableau(liste){
    let tableau = document.getElementById("tbody");
    tableau.innerHTML="";
    //ele.body = response.ok;
    for (let i=0; i< liste.length; i++) {
        let trElement = document.createElement("tr");
        trElement.appendChild(createTdNode(liste[1].id));
        trElement.appendChild(createTdNode(liste[1].nom));
        trElement.appendChild(createTdNode(liste[1].prenom));
        trElement.appendChild(createTdNode(liste[1].email));
        trElement.appendChild(createTdNode(liste[1].number));
        tableau.appendChild(trElement);
        // alert(JSON.stringify(tableau.childNodes[1]));
    }
}

function createTdNode(valeur){
    let txtNode= document.createTextNode(valeur);
    let tdElement= document.createElement("td");
    tdElement.appendChild(txtNode);
    return tdElement;
}





