<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Infirmière libérale</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Kameron&family=Merriweather&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="projet.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="titre-nav-container">
          <a class="titre-nav" href="#À propos">À propos</a>
        </div>
        <div class="titre-nav-container">
          <a class="titre-nav" href="#Le cabinet">Le cabinet</a>
        </div>
        <div class="titre-nav-container">
          <a class="titre-nav" href="#À domicile">À domicile</a>
        </div>
        <div class="titre-nav-container">
          <a class="titre-nav" href="#Prendre">Prendre<br />rendez-vous</a>
        </div>
        <div id="vertical-navbar" class="vertical-navbar">
  <a href="#À propos">Accueil</a>
  <a href="#Le cabinet">Services</a>
  <a href="#À domicile">À propos</a>
  <a href="#Prendre">Contact</a>
  <button id="close-button">Fermer</button>
</div>
        <div class="burger-container">
          <a href="#" id="logo-burger-button">
          <img
            id="logo-burger"
            src="logoBurger.png"
            alt="logo-burger"
            height="80px"
            width="80px"
            class="logo-burger"
          /></a>
        </div>
        <div class="cercle-container">
          <img
            id="À propos"
            src="utilisateur.png"
            alt="Votre photo"
            class="cercle-image"
          />
        </div>
      </nav>

      <img
        class="fond-ecran"
        src="FondEcranNav.png"
        height="300px"
        width="100%"
      />
    </header>
  
    <main>
      <section class="presentation-section">
        <div class="presentation-content">
          <h1>Sahila Azam</h1>
          <h2 class="titre-bleu">Infirmière en Seine-Saint-Denis</h2>
          <p>
            Sahila Azam, infirmière libérale IDEL, réalise des soins
            infirmiers<br />
            à domicile et au cabinet sans rendez-vous et sur rendez-vous.<br /><br />
            Titulaire d'un diplôme d'état infirmier, elle réalise tous types
            de<br />
            soins médicalement prescrits directement au domicile du patient<br />
            et à son cabinet.
          </p>
        </div>
      </section>
    </main>

    <section class="informations-section">
      <div class="langue-paiement">
        <div class="langues-container">
          <h2>Langues parlées</h2>
          <div class="langues">
            <div class="language">
              <img
                src="france.png"
                alt="Drapeau français"
                width="50"
                height="40"
              />
              Français
            </div>

            <div class="language">
              <img
                src="royaume-uni.png"
                alt="Drapeau anglais"
                width="50"
                height="40"
              />
              Anglais
            </div>
          </div>
        </div>

        <div class="moyens-paiement">
          <h2>Moyens de paiement</h2>
          <div class="moyens">
            <div class="paiement">
              <img src="cheque.png" alt="Logo Cheque" width="30" height="40" />
              Tiers payant
            </div>
            <div class="paiement">
              <img src="logo-visa.png" alt="Logo Visa" width="30" height="40" />
              CB
            </div>
            <div class="paiement">
              <img src="cheque.png" alt="Logo Cheque" width="30" height="40" />
              Chèque
            </div>
            <div class="paiement">
              <img
                src="en-especes.png"
                alt="Logo Espece"
                width="30"
                height="40"
              />
              Espèces
            </div>
          </div>
        </div>
        <div class="contacts-container">
          <div class="contact-rectangle">
            <div class="logo-rectangle">
            <img
              src="telephone-portable.png"
              alt="Logo 1"
              width="46"
              height="40"
            />
            </div>
            <div class="contact-info">
              <p><a href="tel:06-00-00-00-00">Portable</a></p>
            </div>
          </div>
          <div class="contact-rectangle">
          <div class="logo-rectangle">
            <img src="telephone.png" alt="Logo 1" width="46" height="40" />
          </div>
            <div class="contact-info">
            
              <p><a href="tel:01-00-00-00-00">Cabinet</a></p>
            </div>
          </div>
          <div class="contact-rectangle">
            <div class="logo-rectangle">
            <img src="mail.png" alt="Logo 1" width="46" height="40" />
            </div>
            <div class="contact-info">
            <p><button class="open-form-button">Contactez-moi</button></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 rendez-vous mx-auto">
            <h3 id="Le cabinet" class="title-40">Venir au cabinet infirmier</h3>
            <p>
              Sahila vous reçoit <b>avec ou sans rendez-vous</b> à son cabinet.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 top-left mx-auto">
            <h3>Carte</h3>
            <iframe
              width="100%"
              height="350"
              frameborder="0"
              style="border: 0"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.5672767139085!2d2.370220112412124!3d48.94268329465085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66956405b9df7%3A0xe7639cd76ab367e9!2s66%20Rue%20Henri%20Barbusse%2C%2093200%20Saint-Denis!5e0!3m2!1sfr!2sfr!4v1697824691780!5m2!1sfr!2sfr"
              allowfullscreen
            ></iframe>
          </div>
          <div class="col-12 col-md-6 top-right mx-auto">
            <h3>Horaires</h3>
            <div class="container" style="max-width: 680px">
              <div class="row" style="height: 47.14px">
                <div
                  class="col-10"
                  style="background-color: rgba(171, 224, 242, 0.2)"
                >
                  Lundi
                </div>
                <div
                  class="col-2"
                  style="background-color: rgba(171, 224, 242, 0.2)"
                >
                  Fermé
                </div>
              </div>
              <div class="row" style="height: 47.14px">
                <div class="col-10">Mardi</div>
                <div class="col-2">09:00 à 18:00</div>
              </div>
              <div class="row" style="height: 47.14px">
                <div
                  class="col-10"
                  style="background-color: rgba(171, 224, 242, 0.2)"
                >
                  Mercredi
                </div>
                <div
                  class="col-2"
                  style="background-color: rgba(171, 224, 242, 0.2)"
                >
                  09:00 à 18:00
                </div>
              </div>
              <div class="row" style="height: 47.14px">
                <div class="col-10">Jeudi</div>
                <div class="col-2">09:00 à 18:00</div>
              </div>
              <div class="row" style="height: 47.14px">
                <div
                  class="col-10"
                  style="background-color: rgba(171, 224, 242, 0.2)"
                >
                  Vendredi
                </div>
                <div
                  class="col-2"
                  style="background-color: rgba(171, 224, 242, 0.2)"
                >
                  09:00 à 18:00
                </div>
              </div>
              <div class="row" style="height: 47.14px">
                <div class="col-10">Samedi</div>
                <div class="col-2">09:00 à 18:00</div>
              </div>
              <div class="row" style="height: 47.14px">
                <div
                  class="col-10"
                  style="background-color: rgba(171, 224, 242, 0.2)"
                >
                  Dimanche
                </div>
                <div
                  class="col-2"
                  style="background-color: rgba(171, 224, 242, 0.2)"
                >
                  Fermé
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 bottom-left mx-auto">
            <h3>Moyens de transport</h3>
            <div class="d-flex align-items-center">
              <img src="metro.png" alt="Logo" width="40" height="40" />

              <div class="text-metro">
                <p>St-Denis Université</p>
              </div>
            </div>

            <br /><br />
            <h3>Parking public</h3>
            <p>Parking Indigo Saint-Denis Université</p>
          </div>
          <div class="col-12 col-md-6 bottom-right mx-auto">
            <h3>Informations pratiques</h3>
            <p class="p1">1er Etage</p>
            <p class="p1">Code 6712B</p>
            <p class=><img src="parking.png" alt="Logo" width="40" height="40" /> Parking au cabinet</p>
            <p class=><img src="handicap.png" alt="Logo" width="40" height="40" /> Accès handicapé</p>
            <p class=><img src="lift.png" alt="Logo" width="40" height="40" /> RDC ou avec ascenceur</p>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-light mt-5 pt-4 pb-4">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 id="À domicile" class="title-40">
              Soins infirmiers à domicile
            </h3>
            <p>
              Sahila intervient à domicile <b>sur rendez-vous</b> pour réaliser
              des soins infirmiers dans les zones suivantes :
            </p>
            <ul class="list-unstyled">
              <li>Epinay-sur-seine</li>
              <li>Villetaneuse</li>
              <li>Pantin</li>
              <li>Aubervilliers</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section
      class="bg-image"
      style="
        background-image: url('Depositphotos_78581292_XL.jpg');
        height: 500px;
        background-size: cover;
        background-position: center;
      "
    >
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <h3 id="Prendre" class="title-40">Besoin de soin ?</h3>
            <p>Prendre rendez-vous en ligne</p>
            <a href="#" class="btn btn-perso appointment-button">Prendre rendez-vous en ligne</a>
          </div>
        </div>
      </div>
    </section>

    <footer
      class="footer-bleu text-dark"
      style="height: 800px; position: relative"
    >
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex">
             <img class="logo-footer img-fluid" src="logo.png" alt="Logo" />

                </div>
              </div>

              <div class="col-md-6 text-center mt-5 mb-4">
                <p><b>Cabinet Infirmier Sahila Azam</b></p>
                <p>Ouvert du mardi au samedi de 9h à 18h00</p>

                <p class="logo-adresse">
                  <img src="map.png" alt="Adresse" width="20" height="20" />
                  66 rue Henri Brabusse
                </p>
                <div class="col-auto">
                  <p>93200 Saint-Denis</p>
                </div>

                <a href="#" class="btn btn-perso appointment-button">Prendre rendez-vous en ligne</a>
              </div>
            </div>
  
          </div>
        </div>
      </div>
      <div class="container-footer">
  <p>
    Copyright © 2023 M. Aowis Tous droits réservés
  </p>
</div>
    </footer>
      <script src="projet.js"></script>
  </body>
</html>
