<h1>Ajouter un éleve.</h1>

<?php
echo $this->Form->create();
echo $this->Form->input('nom');
echo $this->Form->input('prenom');
echo $this->Form->input('dob');
echo $this->Form->end('Sauvegarder l\'éléve');
?>