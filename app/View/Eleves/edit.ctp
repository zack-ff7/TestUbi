<h1>Modifier un éleve.</h1>

<?php
echo $this->Form->create();
echo $this->Form->input('nom',array('value' => $eleve['Eleve']['nom']));
echo $this->Form->input('prenom',array('value' => $eleve['Eleve']['prenom']));
echo $this->Form->input('dob',array('value' => $eleve['Eleve']['dob']));
echo $this->Form->end('Modifier l\'éléve');

?>