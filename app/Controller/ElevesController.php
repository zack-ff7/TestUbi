<?php
class ElevesController extends AppController {
    var $name = 'Eleves';
    var $helpers = array ('Html','Form');
    public $uses=array('Eleve','Note');


    public function index()
    {
    		$eleve=$this->Eleve->find('all');
            
    		$this->set('eleves',$eleve);
          
    }
           
            
        

    
    



    public function add()
    {

         if (!empty($this->data)) {
            if ($this->Eleve->save($this->data)) {
                $this->flash('Votre eleve a été sauvegardé.','/eleves');
                return $this->redirect('/eleves');

              
            }
        }
    }

    

    public function remove($id_eleve)
    {
        $this->Eleve->delete($id_eleve);
        $this->flash('L\'éleve à été supprimé.','/eleves');
         return $this->redirect('/eleves');

    
    }

    public function edit($id_eleve)
    {
    	$this->Eleve->id = $id_eleve;
        $this->set('eleve', $this->Eleve->read());
         if (!empty($this->data)) {
            if ($this->Eleve->save($this->data)) {
                $this->flash('Votre eleve a été modifié.','/eleves');
                 return $this->redirect('/eleves');

              
            }
        }
    }

    public function addNote($id_eleve)
    {
        $this->Eleve->id = $id_eleve;
        $this->set('eleve', $this->Eleve->read());

       if (!empty($this->data)) {
            if ($this->Note->save($this->data)) {
                $this->flash('Votre note a été sauvegardé.','/eleves');
                return $this->redirect('/eleves');

              
            }
        }

    }
}
?>