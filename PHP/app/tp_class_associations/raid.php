<?php
class Raid {
    private $lieu;
    private $date;
    private $participants;

    public function __construct($lieu, $date) {
        $this->lieu = $lieu;
        $this->date = $date;
        $this->participants = array();
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function getDate() {
        return $this->date;
    }

    public function addParticipant(Personnage $participant) {
        $this->participants[] = $participant;
        $participant->addRaid($this);
    }

    public function getParticipants() {
        return $this->participants;
    }
}