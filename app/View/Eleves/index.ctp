<?php
//echo $this->Form->Create('Note', array('url' => 'index'));


?>


<?php
 //echo $this->Form->input('matiere');

?>

<table>
<?php

foreach ($eleves as $eleve) {
	echo '<tr><td>';
	echo $this->Html->link($eleve['Eleve']['nom'].' '.$eleve['Eleve']['prenom'],"edit/".$eleve['Eleve']['id']);
	echo '</td><td>'.$eleve['Eleve']['dob'];
	echo '</td><td>';
	echo $this->Html->link('Ajouter une note', "/eleves/addNote/{$eleve['Eleve']['id']}");
	echo '</td><td>';
	echo $this->Html->link('Supprimer', "/eleves/remove/{$eleve['Eleve']['id']}", null, 'Etes-vous sûr ?' );
	echo '</td></tr>';
	//$i++;	


}
?> </table> <?php

//echo $this->Form->end('Sauvegardez les notes.'); 





?>