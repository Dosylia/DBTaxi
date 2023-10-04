<?php include 'header.php' ?>

<?php $title = "Réservation"; ?>
<?php include 'titre.php'; ?>

<script>
    function afficherChamps() {
      var typeCourse = document.getElementById("typeCourse").value;
      var champsVSL = document.getElementById("champsVSL");
      var champsGareAeroport = document.getElementById("champsGareAeroport");

      // Afficher ou masquer les champs en fonction du choix de type de course
      if (typeCourse === "VSL") {
        champsVSL.style.display = "block";
        champsGareAeroport.style.display = "none";
      } else if (typeCourse === "GareAeroport") {
        champsVSL.style.display = "none";
        champsGareAeroport.style.display = "block";
      }
    }
  </script>

<body>
<section class="contact">

    <div class="formcontact">
        <form method="post" action="includes/reservation.inc.php">

        <p>Les champs avec (<span class="red">*</span>) sont obligatoires</p>

        <div class="rowformcontact">
            <div class="contentformcontact">
            <label for="firstname">Prénom<span class="red">*</span></label>
            <input type="texte" name="firstname" id="firstname" placeholder="John" required>
            </div>

            <div class="contentformcontact">
            <label for="lastname">Nom<span class="red">*</span></label>
            <input type="texte" name="lastname" id="lastname" placeholder="Doe" required>
            </div>
        </div>

        <div class="rowformcontact">
            <div class="contentformcontact">
            <label for="email">Email<span class="red">*</span></label>
            <input type="texte" name="email" id="email" placeholder="****@gmail.com" required>
            </div>

            <div class="contentformcontact">
            <label for="reason">Téléphone<span class="red">*</span></label>
            <input type="texte" name="reason" id="reason" placeholder="06.**.**.**.**" required>
            </div>
        </div>

        <div class="contentformcontact">
  <label for="typeCourse">Type de course :</label>
  <select id="typeCourse" name="typeCourse" onchange="afficherChamps()" required>
    <option value="">Sélectionnez le type de course</option>
    <option value="VSL">VSL</option>
    <option value="GareAeroport">Gare/Aéroport</option>
  </select><br><br>

  <div id="champsVSL" style="display: none;">
    <label for="adresseDepart">Adresse point A :</label>
    <input type="text" id="adresseDepart" name="adresseDepart" placeholder="Adresse de départ"><br><br>

    <label for="adresseArrivee">Adresse point B :</label>
    <input type="text" id="adresseArrivee" name="adresseArrivee" placeholder="Adresse d'arrivée"><br><br>

    <label for="dateVSL">Horaire :</label>
    <input type="date" id="dateVSL" name="dateVSL"><br><br>

    <label for="horaireVSL">Horaire :</label>
    <input type="text" id="horaireVSL" name="horaireVSL" placeholder="Heure Rendez-vous"><br><br>
  </div>

  <div id="champsGareAeroport" style="display: none;">
    <label for="numeroTrainVol">Numéro de train ou de vol :</label>
    <input type="text" id="numeroTrainVol" name="numeroTrainVol"><br><br>

    <label for="dateGareAeroport">Horaire :</label>
    <input type="date" id="dateGareAeroport" name="dateGareAeroport"><br><br>

    <label for="horaireGareAeroport">Horaire :</label>
    <input type="text" id="horaireGareAeroport" name="horaireGareAeroport"><br><br>

    <label for="adresseArriveeGare">Adresse arrivée :</label>
    <input type="text" id="adresseArriveeGare" name="adresseArriveeGare"><br><br>
  </div>
</div>

<input name="submit" id="send-button" type="Submit" value="Envoyé">
</form>
</div>

</body>

<?php include 'footer.php' ?>