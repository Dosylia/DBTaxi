<?php include 'header.php' ?>

<?php $title = "Informations"; ?>
<?php include 'titre.php'; ?>

<body>

<script>
  function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
  }
</script>

    <div class="image_informations">
    <button class="button_informations button_vsl" onclick="scrollToSection('vsl_informations')" style="color: white"><a href="#vsl_informations">Taxi VSL</a></button>
    <button class="button_informations button_gare" onclick="scrollToSection('gareaeroport_informations')" style="color: white"><a href="#gareaeroport_informations">Taxi Gare/Aéroport</a></button>
    </div>
    <div class="top_informations">
        <h1 id="vsl_informations">VSL - Véhicule sanitaire léger</h1>
        <div class="rowlogos_informations">
            <img src="images/cartevitale.png" alt="cartevitale" />
            <img src="images/assurancemaladie.png" alt="assurancemaladie" />
        </div>
        <p>L'Assurance maladie peut prendre en charge vos frais de transport, sous certaines conditions.<br><br>
         Par exemple, si vous vous déplacez pour recevoir des soins, faire pratiquer des examens médicaux<br><br>
          ou répondre à une convocation pour un contrôle réglementaire. La personne chargée d'effectuer ce<br><br> 
          transfert est un Taxi VSL.</p>
        <h2>Fonctionnement</h2>
        <p>Vos frais de transport peuvent être pris en charge à condition d'être prescrits par votre médecin.<br><br>
        Votre médecin prescrit l'établissement de soins le plus proche, adapté à votre état de santé.<br><br>
        Si vous êtes convoqué à un contrôle, la convocation ou l'avis d'audience tient lieu de prescription.<br><br>
        En cas d'urgence, la prescription médicale peut être établie par la suite.</p>

        <h2>Prescription médicale</h2>
        <p>Une prescription médicale (formulaire à remplir par le médecin et à envoyer, par le patient, au médecin conseil<br><br>
     de sa CPAM: CPAM : Caisse primaire d'assurance maladie) suffit pour les transports correspondant notamment aux motifs suivants</p><br><br><br><br>
        <ul>
            <li><strong>Hospitalisation</strong> (entrée et / ou sortie de l’hôpital), quelle que soit la durée (complète, partielle ou ambulatoire)</li><br>
            <li><strong>Affection de longue durée </strong>(ALD) si votre état de santé ne vous permet pas de vous déplacer par vos propres moyens</li><br>
            <li><strong>État justifiant un transport allongé ou une surveillance constante </strong>(ambulance)</li><br>
            <li><strong>Contrôle réglementaire </strong>(convocation du contrôle médical, d'un médecin expert, ou d'un fournisseur d'appareillage agréé)</li><br>
            <li><strong>Soins en rapport avec un accident du travail ou une maladie professionnelle</strong></li><br>
            <li><strong>Retours à domicile </strong>dans le cadre de permissions de sortie pour les patients de </strong>moins de 20 ans hospitalisés 14 jours</strong> et plus</li><br><br>
        
        </ul>
    </div>

    <div id="gareaeroport_informations" class="gareaeroport_informations">
    <h1>Taxi Gare - Aéroport</h1>
    <p>Réservez simplement votre taxi dans la partie réservation du site web.<br><br>
       Pas besoin de création de compte et rapide. En quelques clics votre taxi<br><br>
       est réservé et je confirmerais par téléphone/mail votre prise en charge.
</div>
</body>

<?php include 'footer.php' ?>