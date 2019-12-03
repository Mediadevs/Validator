<?php

namespace Mediadevs\Validator\Traits;

trait HostTrait
{
    /**
     * Pinging the hostname to see if it is live / an actual working hostname.
     *
     * @param string $host
     *
     * @return bool
     */
    protected function checkWhetherHostIsLive(string $host): bool
    {
        $statuses = array(
            200,
            301,
            302,
        );

        // Initializing curl
        $curlHandle = curl_init($host);

        // Validating whether the curl handle can reach the host, else returning false.
        if ($curlHandle !== false) {
            // Calling the host for a response
            curl_setopt_array($curlHandle, array(
                CURLOPT_HEADER          => true,
                CURLOPT_NOBODY          => true,
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_TIMEOUT         => 10,
                CURLOPT_USERAGENT       => 'page-check/1.0',
            ));

            // Executing request
            curl_exec($curlHandle);

            // Collecting the status code and casting it to an integer
            $status = (int) curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);

            // Closing curl
            curl_close($curlHandle);
        } else {
            $status = 500;
        }

        // Validating whether the http status is inside the allowed statuses array (Whether the page is live or not)
        return in_array($status, $statuses) ? true : false;
    }
}
