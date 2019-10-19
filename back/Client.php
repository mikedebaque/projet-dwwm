<?php
class Client
{
    private $sexeClient;
    private $nomClient;
    private $prenomClient;
    private $dateNaissanceClient;
    private $emailClient;
    private $adresseClient;
    private $cpClient;
    private $villeClient;
    private $telClient;

    /**
     * Getter for SexeClient
     *
     * @return [type]
     */
    public function getSexeClient()
    {
        return $this->sexeClient;
    }

    /**
     * Setter for SexeClient
     * @var [type] sexeClient
     *
     * @return self
     */
    public function setSexeClient($sexeClient)
    {
        $this->sexeClient = $sexeClient;
        return $this;
    }


    /**
     * Getter for NomClient
     *
     * @return [type]
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Setter for NomClient
     * @var [type] nomClient
     *
     * @return self
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;
        return $this;
    }


    /**
     * Getter for PrenomClient
     *
     * @return [type]
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Setter for PrenomClient
     * @var [type] prenomClient
     *
     * @return self
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;
        return $this;
    }


    /**
     * Getter for DateNaissanceClient
     *
     * @return [type]
     */
    public function getDateNaissanceClient()
    {
        return $this->dateNaissanceClient;
    }

    /**
     * Setter for DateNaissanceClient
     * @var [type] dateNaissanceClient
     *
     * @return self
     */
    public function setDateNaissanceClient($dateNaissanceClient)
    {
        $this->dateNaissanceClient = $dateNaissanceClient;
        return $this;
    }


    /**
     * Getter for EmailClient
     *
     * @return [type]
     */
    public function getEmailClient()
    {
        return $this->emailClient;
    }

    /**
     * Setter for EmailClient
     * @var [type] emailClient
     *
     * @return self
     */
    public function setEmailClient($emailClient)
    {
        $this->emailClient = $emailClient;
        return $this;
    }


    /**
     * Getter for AdresseClient
     *
     * @return [type]
     */
    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    /**
     * Setter for AdresseClient
     * @var [type] adresseClient
     *
     * @return self
     */
    public function setAdresseClient($adresseClient)
    {
        $this->adresseClient = $adresseClient;
        return $this;
    }


    /**
     * Getter for CpClient
     *
     * @return [type]
     */
    public function getCpClient()
    {
        return $this->cpClient;
    }

    /**
     * Setter for CpClient
     * @var [type] cpClient
     *
     * @return self
     */
    public function setCpClient($cpClient)
    {
        $this->cpClient = $cpClient;
        return $this;
    }


    /**
     * Getter for VilleClient
     *
     * @return [type]
     */
    public function getVilleClient()
    {
        return $this->villeClient;
    }

    /**
     * Setter for VilleClient
     * @var [type] villeClient
     *
     * @return self
     */
    public function setVilleClient($villeClient)
    {
        $this->villeClient = $villeClient;
        return $this;
    }


    /**
     * Getter for TelClient
     *
     * @return [type]
     */
    public function getTelClient()
    {
        return $this->telClient;
    }

    /**
     * Setter for TelClient
     * @var [type] telClient
     *
     * @return self
     */
    public function setTelClient($telClient)
    {
        $this->telClient = $telClient;
        return $this;
    }
}
