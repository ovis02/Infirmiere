// Récupère le bouton "Contactez-moi" et le formulaire
const openFormButton = document.querySelector(".open-form-button");
const contactForm = document.createElement("div");

// Défini le contenu html de mon formulaire
contactForm.innerHTML = `
  <div id="contact-form">
    <h2 class="title-form">Contactez-moi</h2>
    <form>
      <label for="name">Nom :</label>
      <input type="text" id="name" name="name" required />
      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required />
      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="4" required></textarea>
      <button type="submit">Envoyer</button>
    </form>
    <button id="close-form-button">Fermer</button>
  </div>
`;

// Cache le formulaire au départ
contactForm.style.display = "none";

// Ajoute le formulaire au corps de la page
document.body.appendChild(contactForm);

// Gérez l'événement du bouton "Contactez-moi"
openFormButton.addEventListener("click", () => {
  contactForm.style.display = "block";
});

// Gérez l'événement du bouton "Fermer"
const closeFormButton = contactForm.querySelector("#close-form-button");
closeFormButton.addEventListener("click", () => {
  contactForm.style.display = "none";
});

// Gérez la soumission du formulaire
const form = contactForm.querySelector("form");
form.addEventListener("submit", (event) => {
  event.preventDefault();
  // Récupérez les données du formulaire et envoyez-les à votre serveur ici (AJAX, fetch, etc.)
});

//Systeme de rendez-vous

// Fonction pour afficher le formulaire de rendez-vous dans un modèle lightbox
function afficherFormulaire() {
  // Créez le modèle lightbox
  const lightbox = document.createElement("div");
  lightbox.classList.add("lightbox");

  // Créez le contenu du modèle lightbox
  const lightboxContent = document.createElement("div");
  lightboxContent.classList.add("lightbox-content");
  lightboxContent.innerHTML = `
    <h3 class="title-form" >Prendre rendez-vous en ligne</h3>
    <form class="rendez-vous-form">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>
      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" required>
      <label for="dateNaissance">Date de naissance (au format JJ/MM/AAAA) :</label>
      <input type="text" id="dateNaissance" name="dateNaissance" pattern="\\d{2}/\\d{2}/\\d{4}" required>
      <label for="telephone">Numéro de téléphone :</label>
      <input type="text" id="telephone" name="telephone" required>
      <label for="email">Adresse e-mail :</label>
      <input type="email" id="email" name="email" required>
      <label for="numeroSecu">Numéro de sécurité sociale (11 chiffres) :</label>
      <input type="text" id="numeroSecu" name="numeroSecu" pattern="\\d{11}" required>
      <label for="creneau">Créneau horaire :</label>
      <select id="creneau" name="creneau" required>
        <option value="" disabled selected>Sélectionnez un créneau</option>
        ${creneauxHorairesDisponibles
          .map((creneau) => `<option value="${creneau}">${creneau}</option>`)
          .join("")}
      </select>
      <button type="submit">Réserver</button>
    </form>
    <button class="fermer-formulaire">Fermer</button>
  `;

  lightbox.appendChild(lightboxContent);
  document.body.appendChild(lightbox);

  // Affiche le modèle lightbox
  lightbox.style.display = "block";

  // Gérez la soumission du formulaire
  lightboxContent
    .querySelector(".rendez-vous-form")
    .addEventListener("submit", function (event) {
      event.preventDefault();
      // Traitement du formulaire
      // Fermez le modèle lightbox si nécessaire
      fermerLightbox();
    });

  // Gérez le clic sur le bouton "Fermer"
  lightboxContent
    .querySelector(".fermer-formulaire")
    .addEventListener("click", function () {
      fermerLightbox();
    });

  // Fonction pour fermer le modèle lightbox
  function fermerLightbox() {
    document.body.removeChild(lightbox);
  }
}

// Gérez le clic sur les boutons avec la classe "appointment-button"
const appointmentButtons = document.querySelectorAll(".appointment-button");

appointmentButtons.forEach((button) => {
  button.addEventListener("click", function (event) {
    event.preventDefault();
    afficherFormulaire();
  });
});

// Créez un tableau de créneaux horaires disponibles (du mardi au samedi de 9h à 18h)
const creneauxHorairesDisponibles = [];

// Créez des créneaux d'une heure, de 9h à 18h, du mardi au samedi
const joursSemaine = ["Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];

for (let jourIndex = 0; jourIndex < joursSemaine.length; jourIndex++) {
  const jour = joursSemaine[jourIndex];
  for (let heure = 9; heure < 18; heure++) {
    const creneau = `${jour} ${heure}:00 - ${jour} ${heure + 1}:00`;
    creneauxHorairesDisponibles.push(creneau);
  }
}
