<?php

class Resort_Function{
    private $dbcon;
    public function __construct($dbcon)
    {
        $this->dbcon = $dbcon;
    }
// Functions for blog feature
    
	
// Functions for Feedback feature

  public function listFeedbacks(){

        $sql = "SELECT * FROM feedbacks";
        $pdostm = $this->dbcon->prepare($sql);
        $pdostm->execute();

        $feedbacks = $pdostm->fetchAll(PDO::FETCH_ASSOC);
        return $feedbacks;
    }

    public function addFeedback($first_name, $last_name, $email, $comment){
        $sql = "INSERT INTO feedbacks (first_name, last_name, email, comment, date) 
              VALUES (:first_name, :last_name, :email, :comment, CURDATE())";
        $a = $this->dbcon->prepare($sql);

        $a->bindParam(':first_name', $first_name);
        $a->bindParam(':last_name', $last_name);
		$a->bindParam(':email', $email);
		$a->bindParam(':comment', $comment);

        $count = $a->execute();
        return $count;
    }
	
	public function deleteFeedback($feedback_id){
		$sql = "DELETE FROM feedbacks WHERE feedback_id = :feedback_id";

		$d = $this->dbcon->prepare($sql);
		
		$d->bindParam(':feedback_id', $feedback_id);
		
		$count = $d->execute();
		return $count;
	}
	
	public function showFeedback($feedback_id){
		$sql = "SELECT * FROM feedbacks where feedback_id = :feedback_id";
		
		$s = $this->dbcon->prepare($sql);
		$s->bindParam(':feedback_id', $feedback_id);
		$s->execute();
		$feedback = $s->fetch(PDO::FETCH_OBJ);
		return $feedback;

	}
	
	public function updateFeedback($feedback_id, $first_name, $last_name, $email, $comment){
		$sql = "Update feedbacks 
				set first_name = :first_name,
                last_name = :last_name,
				email = :email,
				comment = :comment,
				date = CURDATE()
                WHERE feedback_id = :feedback_id
                ";

		$u = $this->dbcon->prepare($sql);

        $u->bindParam(':feedback_id', $feedback_id);
        $u->bindParam(':first_name', $first_name);
		$u->bindParam(':last_name', $last_name);
		$u->bindParam(':email', $email);
		$u->bindParam(':comment', $comment);

		$count = $u->execute();
		return $count;
	}	
}  
                 









