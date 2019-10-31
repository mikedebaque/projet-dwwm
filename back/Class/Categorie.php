<?php
class Categorie
{
    private $idCategorie;
    private $nomCategorie;

    /**
     * Getter for IdCategorie
     *
     * @return [type]
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Setter for IdCategorie
     * @var [type] idCategorie
     *
     * @return self
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
        return $this;
    }


    /**
     * Getter for NomCategorie
     *
     * @return [type]
     */
    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }

    /**
     * Setter for NomCategorie
     * @var [type] nomCategorie
     *
     * @return self
     */
    public function setNomCategorie($nomCategorie)
    {
        $this->nomCategorie = $nomCategorie;
        return $this;
    }
}
