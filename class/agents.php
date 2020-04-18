<?php

class Agents {
    private $_id_agents;
    private $_pseudo_a;
    private $_mot_de_passe_a;  
    private $_niveau_accreditation_a;




    /**
     * GETTER
     */
    
    
        /**
         * Get the value of _id_agents
         */ 
        public function get_id_agents()
        {
            return $this->_id_agents;
        }

        /**
         * Get the value of _pseudo_a
         */ 
        public function get_pseudo_a()
        {
            return $this->_pseudo_a;
        }

        /**
         * Get the value of _mot_de_passe_a
         */ 
        public function get_mot_de_passe_a()
        {
            return $this->_mot_de_passe_a;
        }

        /**
         * Get the value of _niveau_accreditation_a
         */ 
        public function get_niveau_accreditation_a()
        {
            return $this->_niveau_accreditation_a;
        }



    /**
     * SETTER
     */
    

        /**
         * Set the value of _id_agents
         *
         * @return  self
         */ 
        public function set_id_agents($_id_agents)
        {
            $this->_id_agents = $_id_agents;

            return $this;
        }

        /**
         * Set the value of _pseudo_a
         *
         * @return  self
         */ 
        public function set_pseudo_a($_pseudo_a)
        {
            $this->_pseudo_a = $_pseudo_a;

            return $this;
        }

        /**
         * Set the value of _mot_de_passe_a
         *
         * @return  self
         */ 
        public function set_mot_de_passe_a($_mot_de_passe_a)
        {
            $this->_mot_de_passe_a = $_mot_de_passe_a;

            return $this;
        }

        /**
         * Set the value of _niveau_accreditation_a
         *
         * @return  self
         */ 
        public function set_niveau_accreditation_a($_niveau_accreditation_a)
        {
            $this->_niveau_accreditation_a = $_niveau_accreditation_a;

            return $this;
        }
}