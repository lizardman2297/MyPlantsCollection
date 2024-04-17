<?php

    class plants
    {
        protected $id;
        protected $latinName;
        protected $vernacularName;
        protected $nickname;
        protected $state;
        protected $obtainedDate;
        protected $motherPlant;
        protected $picture;
        protected $watering;
        protected $note;



        function __construct($id, $vernacularName, $state, $obtainedDate = NULL, $latinName = NULL, $nickname = NULL, $picture = NULL, $watering = NULL, $note =NULL, $motherPlant = NULL) {
        	$this->id = $id;
        	$this->latinName = $latinName;
        	$this->vernacularName = $vernacularName;
        	$this->nickname = $nickname;
        	$this->state = $state;
        	$this->obtainedDate = $obtainedDate;
        	$this->motherPlant = $motherPlant;
        	$this->picture = $picture;
        	$this->watering = $watering;
        	$this->note = $note;
        }

        

        public function getId() {
        	return $this->id;
        }

        /**
        * @param $id
        */
        public function setId($id) {
        	$this->id = $id;
        }

        public function getLatinName() {
        	return $this->latinName;
        }

        /**
        * @param $latinName
        */
        public function setLatinName($latinName) {
        	$this->latinName = $latinName;
        }

        public function getVernacularName() {
        	return $this->vernacularName;
        }

        /**
        * @param $vernacularName
        */
        public function setVernacularName($vernacularName) {
        	$this->vernacularName = $vernacularName;
        }

        public function getNickname() {
        	return $this->nickname;
        }

        /**
        * @param $nickname
        */
        public function setNickname($nickname) {
        	$this->nickname = $nickname;
        }

        public function getState() {
        	return $this->state;
        }

        /**
        * @param $state
        */
        public function setState($state) {
        	$this->state = $state;
        }

        public function getObtainedDate() {
        	return $this->obtainedDate;
        }

        /**
        * @param $obtainedDate
        */
        public function setObtainedDate($obtainedDate) {
        	$this->obtainedDate = $obtainedDate;
        }

        public function getMotherPlant() {
        	return $this->motherPlant;
        }

        /**
        * @param $motherPlant
        */
        public function setMotherPlant($motherPlant) {
        	$this->motherPlant = $motherPlant;
        }

        public function getPicture() {
        	return $this->picture;
        }

        /**
        * @param $picture
        */
        public function setPicture($picture) {
        	$this->picture = $picture;
        }

        public function getWatering() {
        	return $this->watering;
        }

        /**
        * @param $watering
        */
        public function setWatering($watering) {
        	$this->watering = $watering;
        }

        public function getNote() {
        	return $this->note;
        }

        /**
        * @param $note
        */
        public function setNote($note) {
        	$this->note = $note;
        }
    }
    