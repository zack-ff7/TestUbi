
<?php
class NotesController extends AppController {
    var $name = 'Notes';
    var $helpers = array ('Html','Form');
    public $uses=array('Eleve','Note','Matiere');


    public function add()
    {
    		
           
        if (!empty($this->data)) {
            if ($this->Note->save($this->data)) {
                $this->flash('Votre note a été sauvegardée.','/eleves');

              
            }
        }
            
    }

}