<?php


echo 'Nom: '.$eleve['Eleve']['nom'].'<br>';
echo 'Prénom: '.$eleve['Eleve']['prenom'].'<br>';
echo 'Date de naissance: '.$eleve['Eleve']['dob'].'<br>';

echo $this->Form->create('Note');
echo $this->Form->input('matiere');
echo $this->Form->input('note');
echo $this->Form->input('id_eleve',array('type'=> 'hidden', 'value'=>$eleve['Eleve']['id']));
echo $this->Form->end('Sauvegarder la note');


?>