<form method="POST" action="<?php echo $urlbase; ?>/write">
<?php if ($event->id): ?>
    <input type="hidden" name="id" value="<?php echo $event->id; ?>" />
<?php endif; ?>
  <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $event->nom; ?>" aria-description="nomHelp"/>
      <div id="nomHelp" class="form-text">Nom de votre atelier bénévole</div>
  </div>
  <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" id="description" name="description" aria-description="descriptionHelp"/>
      <?php echo $event->description; ?>
      </textarea>
      <div id="descriptionHelp" class="form-text">Décrivez ici ce que vous proposez durant le repair afin de donner envie de venir réparer</div>
  </div>
  <div class="row mb-3">
  <div class="col-4">
      <label for="date" class="form-label">Date_debut</label>
      <input type="date" class="form-control" id="date" name="date" value="<?php echo $event->date; ?>" aria-description="date_debutHelp"/>
      <div id="date_debutHelp" class="form-text">Date de l'atelier</div>
  </div>
  <div class="col-4">
      <label for="heure_debut" class="form-label">Date_debut</label>
      <input type="time" class="form-control" id="heure_debut" name="heure_debut" value="<?php echo $event->heure_debut; ?>" aria-description="date_debutHelp"/>
      <div id="date_debutHelp" class="form-text">Heure de début</div>
  </div>
  <div class="col-4">
      <label for="date_fin" class="form-label">Date_fin</label>
      <input type="time" class="form-control" id="heure_fin" name="heure_fin" value="<?php echo $event->heure_fin; ?>" aria-description="date_finHelp"/>
      <div id="date_finHelp" class="form-text">Heure de fin</div>
  </div>
  </div>
  <div class="mb-3">
      <label for="adresse" class="form-label">Lieu de l'atelier</label>
      <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $event->adresse; ?>" aria-description="adresseHelp"/>
      <div id="adresseHelp" class="form-text">Adresse</div>
  </div>
  <div class="mb-3">
      <label for="url_web" class="form-label">Site du repair</label>
      <input type="url" class="form-control" id="url_web" name="url_web" value="<?php echo $event->url_web; ?>" aria-description="url_webHelp"/>
      <div id="url_webHelp" class="form-text">Page web qui permet de se renseigner sur votre repair</div>
  </div>
  <div class="mb-3">
      <label for="url_inscription" class="form-label">Page pour l'inscription</label>
      <input type="url" class="form-control" id="url_inscription" name="url_inscription" value="<?php echo $event->url_inscription; ?>" aria-description="url_inscriptionHelp"/>
      <div id="url_inscriptionHelp" class="form-text">Page web qui permet aux personnes de s'inscrire à votre repair</div>
  </div>
  <div class="mb-3">
      <label for="email" class="form-label">Votre email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo $event->email; ?>" aria-description="emailHelp"/>
      <div id="emailHelp" class="form-text">Ne sera utilisé que pour confirmer, éditer cet évènement ou pour échanger avec les modérateurices</div>
  </div>
  <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="file" class="form-control" id="image" name="image" value="<?php echo $event->image; ?>" aria-description="imageHelp"/>
      <div id="imageHelp" class="form-text">Image d'illustration du repair (reproduite le site et sur les relais sociaux)</div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="rgpd" required="required">
    <label class="form-check-label" for="rgpd">J'ai pris note que mon email n'est conservé pour me permettre de publier cet évènement ou me permettre d'être reconnu par ce site</label>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="remember">
    <label class="form-check-label" for="remember">Je souhaite être reconnu à l'avenir par ce site (pour éviter d'avoir à ressaisir des informations)</label>
  </div>
  <?php if ($event->authorization_key): ?>
  <input type="hidden" name="authorization_key" value="<?php echo $event->authorization_key; ?>"/>
  <?php endif; ?>
  <button type="submit" class="btn btn-primary">Proposer cet évènement repair</button>
</form>
