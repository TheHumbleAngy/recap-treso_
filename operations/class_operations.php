<?php
    /**
     * Created by PhpStorm.
     * User: angem
     * Date: 22-Sep-18
     * Time: 11:46 PM
     */

    class class_operations {
        protected $id_operation;
        protected $id_type_operation;
        protected $id_banque;
        protected $id_pays;
        protected $id_monnaie;
        protected $compte_operation;
        protected $tag_operation;
        protected $date_saisie_operation;
        protected $date_operation;
        protected $designation_operation;
        protected $cours_operation;
        protected $montant_operation;
        protected $montant_xof_operation;
        protected $statut_operation;
        protected $observation_operation;
        protected $etat_operation;

        protected $connection;
    }

    class operations extends class_operations {

        public function __construct() {
            $this->connection = mysqli_connect('localhost', 'root', '', 'recap_treso');
            if ($this->connection->connect_error) {
                die($this->connection->connect_error);
            }
        }

        /**
         * @param mixed $id_banque
         */
        private function setIdBanque($id_banque) {
            $this->id_banque = $id_banque;
        }

        /**
         * @param mixed $id_type_operation
         */
        private function setIdTypeOperation($id_type_operation) {
            $this->id_type_operation = $id_type_operation;
        }

        /**
         * @param mixed $compte_operation
         */
        private function setCompteOperation($compte_operation) {
            $this->compte_operation = $compte_operation;
        }

        /**
         * @param mixed $tag_operation
         */
        private function setTagOperation($tag_operation) {
            $this->tag_operation = $tag_operation;
        }

        /**
         * @param mixed $date_saisie_operation
         */
        private function setDateSaisieOperation($date_saisie_operation) {
            $this->date_saisie_operation = $date_saisie_operation;
        }

        /**
         * @param mixed $date_operation
         */
        private function setDateOperation($date_operation) {
            $this->date_operation = $date_operation;
        }

        /**
         * @param mixed $designation_operation
         */
        private function setDesignationOperation($designation_operation) {
            $this->designation_operation = $designation_operation;
        }

        /**
         * @param mixed $cours_operation
         */
        private function setCoursOperation($cours_operation) {
            $this->cours_operation = $cours_operation;
        }

        /**
         * @param mixed $montant_operation
         */
        private function setMontantOperation($montant_operation) {
            $this->montant_operation = $montant_operation;
        }

        /**
         * @param mixed $montant_xof_operation
         */
        private function setMontantXofOperation($montant_xof_operation) {
            $this->montant_xof_operation = $montant_xof_operation;
        }

        /**
         * @param mixed $observation_operation
         */
        private function setObservationOperation($observation_operation) {
            $this->observation_operation = $observation_operation;
        }

        /**
         * @return mixed
         */
        private function getIdBanque() {
            return $this->id_banque;
        }

        /**
         * @return mixed
         */
        private function getIdTypeOperation() {
            return $this->id_type_operation;
        }

        /**
         * @return mixed
         */
        private function getCompteOperation() {
            return $this->compte_operation;
        }

        /**
         * @return mixed
         */
        private function getTagOperation() {
            return $this->tag_operation;
        }

        /**
         * @return mixed
         */
        private function getDateSaisieOperation() {
            return $this->date_saisie_operation;
        }

        /**
         * @return mixed
         */
        private function getDateOperation() {
            return $this->date_operation;
        }

        /**
         * @return mixed
         */
        private function getDesignationOperation() {
            return $this->designation_operation;
        }

        /**
         * @return mixed
         */
        private function getCoursOperation() {
            return $this->cours_operation;
        }

        /**
         * @return mixed
         */
        private function getMontantOperation() {
            return $this->montant_operation;
        }

        /**
         * @return mixed
         */
        private function getMontantXofOperation() {
            return $this->montant_xof_operation;
        }

        /**
         * @return mixed
         */
        private function getObservationOperation() {
            return $this->observation_operation;
        }

        /**
         * @return mixed
         */
        public function getStatutOperation() {
            return $this->statut_operation;
        }

        /**
         * @param mixed $statut_operation
         */
        public function setStatutOperation($statut_operation) {
            $this->statut_operation = $statut_operation;
        }

        /**
         * @return mixed
         */
        public function getEtatOperation() {
            return $this->etat_operation;
        }

        /**
         * @param mixed $etat_operation
         */
        public function setEtatOperation($etat_operation) {
            $this->etat_operation = $etat_operation;
        }

        /**
         * @return mixed
         */
        public function getIdPays() {
            return $this->id_pays;
        }

        /**
         * @param mixed $id_pays
         */
        public function setIdPays($id_pays) {
            $this->id_pays = $id_pays;
        }

        /**
         * @return mixed
         */
        public function getIdMonnaie() {
            return $this->id_monnaie;
        }

        /**
         * @param mixed $id_monnaie
         */
        public function setIdMonnaie($id_monnaie) {
            $this->id_monnaie = $id_monnaie;
        }

        public function setData($id_type_operation, $id_banque, $id_pays, $id_monnaie, $compte_operation, $tag_operation, $date_saisie_operation, $date_operation, $designation_operation, $cours_operation, $montant_operation, $montant_xof_operation, $statut_operation, $observation_operation) {
            try {
                $this->setIdTypeOperation($id_type_operation);
                $this->setIdBanque($id_banque);
                $this->setIdPays($id_pays);
                $this->setIdMonnaie($id_monnaie);
                $this->setCompteOperation($compte_operation);
                $this->setTagOperation($tag_operation);
                $this->setDateSaisieOperation($date_saisie_operation);
                $this->setDateOperation($date_operation);
                $this->setDesignationOperation($designation_operation);
                $this->setCoursOperation($cours_operation);
                $this->setMontantOperation($montant_operation);
                $this->setMontantXofOperation($montant_xof_operation);
                $this->setStatutOperation($statut_operation);
                $this->setObservationOperation($observation_operation);

                if ($this->statut_operation != 1) {
                    $this->setEtatOperation(0);
                } else {
                    $this->setEtatOperation(1);
                }

                return true;
            } catch (Exception $e) {
                return false;
            }
        }

        function getData() {
            try {
                return $arr_operation = array($this->getIdTypeOperation(), $this->getIdBanque(), $this->getIdPays(), $this->getIdMonnaie(), $this->getCompteOperation(), $this->getTagOperation(), $this->getDateSaisieOperation(), $this->getDateOperation(), $this->getDesignationOperation(), $this->getCoursOperation(), $this->getMontantOperation(), $this->getMontantXofOperation(), $this->getStatutOperation(), $this->getObservationOperation(), $this->getEtatOperation());
            } catch (Exception $e) {
                return false;
            }
        }

        function saveData($banque, $pays, $monnaie) {

            // On génère le code, puis on vérifie son existence dans la base
            $b = strtoupper($banque) . strtoupper($pays) . strtoupper($monnaie);
            $annee = date("Y");
            $annee = substr($annee, -2);
            $mois = date("m");
            $mois = substr($mois, -2);
            $format = '%02d';

            $id = 1;
            $test = TRUE;
            do {
                $code = $b . sprintf($format, $mois) . sprintf($format, $annee) . sprintf($format, $id);

                $sql_operation = "SELECT * FROM operations WHERE id_operation = '$code'";
                $resultat = $this->connection->query($sql_operation);
                if ($resultat->num_rows > 0) {
                    $id++;
                } else {
                    $test = FALSE;
                }
            } while ($test);

            $this->id_operation = $code;

            $compte = mysqli_escape_string($this->connection, $this->compte_operation);
            $libelle = mysqli_escape_string($this->connection, $this->tag_operation);
            $operation = mysqli_escape_string($this->connection, $this->designation_operation);
            $observation = mysqli_escape_string($this->connection, $this->observation_operation);

            $compte = htmlspecialchars($compte);
            $libelle = htmlspecialchars($libelle);
            $operation = htmlspecialchars($operation);
            $observation = htmlspecialchars($observation);

            if ($this->statut_operation == 3) {
                $regul_type = ($this->id_type_operation == 0 ? 1 : 0);
                $regul_id = $b . sprintf($format, $mois) . sprintf($format, $annee) . sprintf($format, ++$id);
                $regul_statut = 4;
                $this->etat_operation = 1;
                $observation = "PIECE ANNULEE ET CONTRE-PASSEE A LA PIECE " . $regul_id;
                $regul_observation = "REGULARISATION DE LA PIECE " . $this->id_operation;

                $sql_regul = "INSERT INTO operations (id_operation, 
                                      id_type_operation, 
                                      id_banque, 
                                      id_pays, 
                                      id_monnaie, 
                                      compte_operation, 
                                      tag_operation, 
                                      date_saisie_operation, 
                                      date_operation, 
                                      designation_operation, 
                                      cours_operation, 
                                      montant_operation, 
                                      montant_xof_operation, 
                                      statut_operation,
                                      observation_operation,
                                      etat_operation)
                    VALUES ('$regul_id',
                            '$regul_type',
                            '$this->id_banque',
                            '$this->id_pays',
                            '$this->id_monnaie',
                            '$compte',
                            '$libelle',
                            '$this->date_saisie_operation',
                            '$this->date_operation',
                            '$operation',
                            '$this->cours_operation',
                            '$this->montant_operation',
                            '$this->montant_xof_operation',
                            '$regul_statut',
                            '$regul_observation',
                            '$this->etat_operation')";
            }

            $sql = "INSERT INTO operations (id_operation, 
                                      id_type_operation, 
                                      id_banque, 
                                      id_pays, 
                                      id_monnaie, 
                                      compte_operation, 
                                      tag_operation, 
                                      date_saisie_operation, 
                                      date_operation, 
                                      designation_operation, 
                                      cours_operation, 
                                      montant_operation, 
                                      montant_xof_operation, 
                                      statut_operation,
                                      observation_operation,
                                      etat_operation)
                    VALUES ('$this->id_operation',
                            '$this->id_type_operation',
                            '$this->id_banque',
                            '$this->id_pays',
                            '$this->id_monnaie',
                            '$compte',
                            '$libelle',
                            '$this->date_saisie_operation',
                            '$this->date_operation',
                            '$operation',
                            '$this->cours_operation',
                            '$this->montant_operation',
                            '$this->montant_xof_operation',
                            '$this->statut_operation',
                            '$observation',
                            '$this->etat_operation')";

            //echo $sql;
            if ($result = mysqli_query($this->connection, $sql)) {
                if (isset($sql_regul)) {
                    if ($result = mysqli_query($this->connection, $sql_regul))
                        return TRUE;
                    else
                        return FALSE;
                }
                return TRUE;
            }
            else
                return FALSE;
        }

        function updateStatut($id, $statut) {
            $sql = "UPDATE operations SET 
                      statut_operation = '" . $statut . "'
                    WHERE id_operation = '" . $id . "'";

            if ($result = mysqli_query($this->connection, $sql)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        function updateEtat($id, $etat) {
            $sql = "UPDATE operations SET 
                      etat_operation = '" . $etat . "'
                    WHERE id_operation = '" . $id . "'";

            if ($result = mysqli_query($this->connection, $sql)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }