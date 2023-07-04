<?php

namespace Laxit\SapBridge;

class SapBridge
{
    protected $connection;
    protected $protocol;

    public function __construct(array $config)
    {
        $this->protocol = $config['protocol'];

        // Initialize SAP connection based on the protocol setting
        if ($this->protocol === 'bapi') {
            // Initialize BAPI connection
            $this->connection = new BapiConnection($config);
        } else {
            // Initialize RFC/OData connection
            $this->connection = new RfcODataConnection($config);
        }
    }

    public function setConnection($connection)
    {
        $this->connection = $connection;
    }

    public function executeBapi($bapiName, array $parameters)
    {
        if ($this->protocol === 'bapi') {
            // Execute BAPI and return the result
            return $this->connection->executeBapi($bapiName, $parameters);
        } else {
            // Throw an exception or handle the error when BAPI is required but protocol is not set to 'bapi'
            throw new \Exception('BAPI execution is not supported in the current protocol.');
        }
    }

    public function executeRfc($rfcName, array $parameters)
    {
        // Execute RFC and return the result
        return $this->connection->executeRfc($rfcName, $parameters);
    }

    public function executeOData($serviceUrl, $endpoint, array $parameters)
    {
        // Execute OData request and return the result
        return $this->connection->executeOData($serviceUrl, $endpoint, $parameters);
    }
}
