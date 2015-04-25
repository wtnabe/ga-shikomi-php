<?php
namespace GAShikomi;

class InexpectantResponse {}

class Api
{
    /**
     * Config
     * @var object
     */
    var $config;
    /**
     * Google_Client
     * @var object
     */
    var $client;
    /**
     * Google_Service_Analytics
     * @var object
     */
    var $analytics;
    /**
     * @var array
     */
    var $last_request;

    /**
     * @param Config $config
     */
    function __construct($config)
    {
        $this->_init($config);
    }

    /**
     * @param Config $config
     */
    function _init($config)
    {
        $this->config = $config;
        $this->client = new \Google_Client();
    }

    function _auth()
    {
        $storage = new FileStorage($this->config);
        $this->client->setAuthConfigFile($storage->secrets);
        $this->client->addScope(\Google_Service_Analytics::ANALYTICS,
                                \Google_Service_Analytics::ANALYTICS_EDIT);

        $credential = $storage->loadCredential();
        $this->client->setAccessToken($credential);
        $this->client->setClientId(json_decode($credential)->client_id);
    }

    function _init_service()
    {
        $this->analytics = new \Google_Service_Analytics($this->client);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
