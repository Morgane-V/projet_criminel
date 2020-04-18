<?php

class Signalements {

    protected $_temoignages_id_temoignage;
    protected $_recherches_id_r;

    /**
     * GETTER
     */
    

        /**
         * Get the value of _temoignages_id_temoignage
         */ 
        public function get_temoignages_id_temoignage()
        {
            return $this->_temoignages_id_temoignage;
        }

        /**
         * Get the value of _recherches_id_r
         */ 
        public function get_recherches_id_r()
        {
            return $this->_recherches_id_r;
        }

    /**
     * SETTER
     */
    

        /**
         * Set the value of _temoignages_id_temoignage
         *
         * @return  self
         */ 
        public function set_temoignages_id_temoignage($_temoignages_id_temoignage)
        {
            $this->_temoignages_id_temoignage = $_temoignages_id_temoignage;

            return $this;
        }

        /**
         * Set the value of _recherches_id_r
         *
         * @return  self
         */ 
        public function set_recherches_id_r($_recherches_id_r)
        {
            $this->_recherches_id_r = $_recherches_id_r;

            return $this;
        }
}