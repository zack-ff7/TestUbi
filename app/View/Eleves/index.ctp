

<table>
<?php

foreach ($eleves as $eleve) {
	echo '<tr><td>';
	echo $this->Html->link($eleve['Eleve']['nom'].' '.$eleve['Eleve']['prenom'],"edit/".$eleve['Eleve']['id']);
	echo '</td><td>'.$eleve['Eleve']['dob'];
	echo '</td><td>';
	echo $this->Html->link('Supprimer', "/eleves/remove/{$eleve['Eleve']['id']}", null, 'Etes-vous sûr ?' );
	echo '</td></tr>';
	


}
?> </table> <?php

echo $this->Html->link('Ajouter un eleve', '/eleves/add');



?>