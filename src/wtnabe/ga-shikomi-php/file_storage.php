<?php
namespace GAShikomi;

class FileStorage
{
    /**
     * @var string
     */
    var $store      = null;
    /**
     * @var string
     */
    var $credential = null;
    /**
     * @var string
     */
    var $secrets    = null;

    /**
     * @param Config
     */
    function __construct($config)
    {
        $this->store      = $config->credentialStore();
        $this->credential = $this->store.'/.ga-cli-credential';
        $this->secrets    = $this->store.'/client_secrets.json';
    }

    /**
     * @return string
     */
    function loadCredential()
    {
        return file_get_contents($this->credential);
    }

    /**
     * @return boolean
     */
    function credentialExists()
    {
        return file_exists($this->credential);
    }

    /**
     * @return boolean
     */
    function credentialEmpty()
    {
        return $this->credentialExists() && strlen($this->loadCredential()) == 0;
  }

    /**
     * @return string
     */
    function loadSecrets()
    {
        return file_get_contents($this->secrets);
    }

    /**
     * @return boolean
     */
    function secretsExists()
    {
        return file_exists($this->secrets);
    }

    /**
     * @return boolean
     */
    function secretsEmpty()
    {
        return $this->secretsExists() && strlen($this->loadSecrets()) == 0;
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
