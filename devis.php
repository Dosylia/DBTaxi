<?php include 'header.php' ?>

<?php $title = "Devis"; ?>
<?php include 'titre.php'; ?>


<body>
<section class="contact">

    <div class="formcontact">
        <form method="post" action="includes/devis.inc.php">

        <p>Les champs avec (<span class="red">*</span>) sont obligatoires</p>

        <div class="rowformcontact">
            <div class="contentformcontact">
            <label for="firstname">Prénom<span class="red">*</span></label>
            <input type="text" name="firstname" id="firstname" placeholder="John" required>
            </div>

            <div class="contentformcontact">
            <label for="lastname">Nom<span class="red">*</span></label>
            <input type="text" name="lastname" id="lastname" placeholder="Doe" required>
            </div>
        </div>

        <div class="rowformcontact">
            <div class="contentformcontact">
            <label for="email">Email<span class="red">*</span></label>
            <input type="text" name="email" id="email" placeholder="****@gmail.com" required>
            </div>

            <div class="contentformcontact">
            <label for="reason">Téléphone<span class="red">*</span></label>
            <input type="text" name="reason" id="reason" placeholder="06.**.**.**.**" required>
            </div>
        </div>

        <div class="rowformcontact">
            <div class="contentformcontact">
            <label for="pointa">Point A<span class="red">*</span></label>
            <input type="text" name="pointa" id="pointa" placeholder="Adresse de départ" required>
            </div>

            <div class="contentformcontact">
            <label for="pointb">Point B<span class="red">*</span></label>
            <input type="text" name="pointb" id="pointb" placeholder="Adresse d'arrivée" required>
            </div>
        </div>

        <div class="contentformcontact">
            <label for="typeCourse">Type de course :</label>
            <select id="typeCourse" name="typeCourse" required>
                <option value="">Sélectionnez le type de course</option>
                <option value="VSL">VSL</option>
                <option value="GareAeroport">Gare/Aéroport</option>
            </select><br><br>
        </div>


     <input name="submit" id="send-button" type="submit" value="Envoyer">
</form>
</div>

</body>


<?php include 'footer.php' ?>