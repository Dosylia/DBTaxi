<?php include 'header.php' ?>

<?php $title = "Contact"; ?>
<?php include 'titre.php'; ?>

<body>
<section class="contact">

    <div class="formcontact">
        <form method="post" action="includes/contact.inc.php">

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
            <label for="message">Message<span class="red">*</span></label>
            <textarea type="texte" name="message" id="message" placeholder="Votre message ici" required></textarea>
            </div>

            <input name="submit" id="send-button" type="Submit" value="Envoyé">
        </form>
    </div>

    <div class="contactdirect">
        <div class="emailtel">
        <p>Email : </p>
        <p>Dombesbressetaxi@hotmail.com</p>
        </div>  
        <div class="emailtel">
        <p>Téléphone : </p>
        <p>06.38.21.43.06</p>
        </div>  
    </div>

    <div class="fincontact">
    </div>

</body>

<?php include 'footer.php' ?>