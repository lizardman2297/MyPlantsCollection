<?php

    class picture
    {
        protected $pictureLink;
        protected $pictureDate;
        protected $title;
        protected $description;
        protected $idPlant;


        function __construct($pictureLink, $pictureDate,  $idPlant, $title = NULL, $description = NULL) {
        	$this->pictureLink = $pictureLink;
        	$this->pictureDate = $pictureDate;
        	$this->title = $title;
        	$this->description = $description;
        	$this->idPlant = $idPlant;
        
        }

        public function getPictureLink() {
        	return $this->pictureLink;
        }

        /**
        * @param $pictureLink
        */
        public function setPictureLink($pictureLink) {
        	$this->pictureLink = $pictureLink;
        }

        public function getPictureDate() {
        	return $this->pictureDate;
        }

        /**
        * @param $pictureDate
        */
        public function setPictureDate($pictureDate) {
        	$this->pictureDate = $pictureDate;
        }

        public function getTitle() {
        	return $this->title;
        }

        /**
        * @param $title
        */
        public function setTitle($title) {
        	$this->title = $title;
        }

        public function getDescription() {
        	return $this->description;
        }

        /**
        * @param $description
        */
        public function setDescription($description) {
        	$this->description = $description;
        }

        public function getIdPlant() {
        	return $this->idPlant;
        }

        /**
        * @param $idPlant
        */
        public function setIdPlant($idPlant) {
        	$this->idPlant = $idPlant;
        }
    }
    