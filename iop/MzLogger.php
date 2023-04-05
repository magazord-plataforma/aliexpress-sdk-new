<?php

/**
 * Description of MzLogger
 *
 * @author Maicon Sasse
 */
class MzLogger
{

    /**
     * Url da Requisição
     * @var string
     */
    private $url;

    /**
     * Requisição
     * @var string
     */
    private $requestString;

    /**
     * Http Code Resposta
     * @var int
     */
    private $httpCode;

    /**
     * Resposta
     * @var string
     */
    private $responseString;

    /**
     * Código do Erro CURL
     * @var int
     */
    private $curlErrorCode;

    /**
     * Erro CURL
     * @var string
     */
    private $curlError;

    public function getUrl()
    {
        return $this->url;
    }

    public function getRequestString()
    {
        return $this->requestString;
    }

    public function getHttpCode()
    {
        return $this->httpCode;
    }

    public function getResponseString()
    {
        return $this->responseString;
    }

    public function getCurlErrorCode()
    {
        return $this->curlErrorCode;
    }

    public function getCurlError()
    {
        return $this->curlError;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function setRequestString($requestString)
    {
        $this->requestString = $requestString;
    }

    public function setHttpCode($httpCode)
    {
        $this->httpCode = $httpCode;
    }

    public function setResponseString($responseString)
    {
        $this->responseString = $responseString;
    }

    public function setCurlErrorCode($curlErrorCode)
    {
        $this->curlErrorCode = $curlErrorCode;
    }

    public function setCurlError($curlError)
    {
        $this->curlError = $curlError;
    }

    public function reset()
    {
        $this->setUrl(null);
        $this->setRequestString(null);
        $this->setHttpCode(null);
        $this->setResponseString(null);
        $this->setCurlErrorCode(null);
        $this->setCurlError(null);
    }

}