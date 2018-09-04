<?php
/**
 * Created by PhpStorm.
 * User: OM
 * Date: 04-09-2018
 * Time: 07:33 AM
 */

namespace common\components;


use yii\httpclient\Client;

class HttpService
{
    private $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'transport' => 'yii\httpclient\CurlTransport'
        ]);
        $this->init();
    }

    /**
     * To override init method if anything required on class initialization
     *
     * @return void
     */
    protected function init()
    {
    }

    /**
     * To handel get request
     *
     * @param string $url url
     * @param array $data data
     * @param array $header headers
     * @param array $options options
     *
     * @return array|mixed
     * @throws \yii\httpclient\Exception
     */
    public function get(string $url, array $data = [], array $header = [], array $options = [])
    {
        if (empty($data)) {
            $data = null;
        }

        $response = $this->httpClient->get($url, $data, $header, $options)->setFormat(Client::FORMAT_JSON)->send();

        if ($response->getIsOk() && $response->getStatusCode() == 200) {
            return $response->getData();
        }
        //@todo log in database in case of wrong request
    }

    /**
     * To handle post request
     *
     * @param string $url url
     * @param array $data data
     * @param array $header header
     * @param array $options options
     *
     * @return array|mixed
     * @throws \yii\httpclient\Exception
     */
    public function post(string $url, array $data = [], array $header = [], array $options = [])
    {
        if (empty($data)) {
            $data = null;
        }
        $response = $this->httpClient->post($url, $data, $header, $options)->setFormat(Client::FORMAT_JSON)->send();
        if ($response->getIsOk() && $response->getStatusCode() == 200) {
            return $response->getData();
        }
        //@todo log in database in case of wrong request
    }
}