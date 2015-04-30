<?php
namespace GAShikomi;

class EnvStorage
{
    function __construct($config)
    {
        $this->credential = $_SERVER['GOOGLE_API_CREDENTIAL'];
        $this->secrets    = $_SERVER['GOOGLE_API_SECRETS'];
    }

    function loadCredential()
    {
        return $this->credential;
    }

    function credentialExists()
    {
        return strlen($this->credential) > 0;
    }

    function credentialEmpty()
    {
        return !$this->credentialExists();
    }

    function loadSecrets()
    {
        return $this->secrets;
    }

    function secretsExists()
    {
        return strlen($this->secrets) > 0;
    }

    function secretsEmpty()
    {
        return !$this->secretsExists();
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
