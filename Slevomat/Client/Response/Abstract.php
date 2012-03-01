<?php

/**
* Slevomat.cz/Zľavomat.sk Partner API Client.
*
* @copyright Copyright (c) 2012 Slevomat.cz, s.r.o.
* @version 1.0
* @apiVersion 1.0
* @link http://www.slevomat.cz/pro-partnery/voucher-api
* @link http://www.zlavomat.sk/pre-partnerov/voucher-api
*/

/**
 * Abstract API response class.
 *
 * Provides the basic common functionality of both the success and failure response objects.
 */
abstract class Slevomat_Client_Response_Abstract
{
	/**
	 * Operation success identifier.
	 *
	 * @var boolean
	 */
	private $result;

	/**
	 * Response HTTP status code.
	 *
	 * @var integer
	 */
	private $httpCode;

	/**
	 * Creates the response objects and parses the response data.
	 *
	 * @param array $responseData Response data
	 * @param integer $httpCode Response HTTP status code
	 */
	final public function __construct(array $responseData, $httpCode)
	{
		$this->result = $responseData['result'];
		$this->httpCode = $httpCode;

		$this->parseResponseData($responseData);
	}

	/**
	 * Returns if the operation was preformed successfully.
	 *
	 * @return boolean
	 */
	public function getResult()
	{
		return $this->result;
	}

	/**
	 * Returns the response HTTP status code.
	 *
	 * @return integer
	 */
	public function getHttpCode()
	{
		return $this->httpCode;
	}

	/**
	 * Parses the response data.
	 *
	 * @param array $responseData Response data
	 */
	abstract protected function parseResponseData(array $responseData);

	/**
	 * Returns the raw data.
	 *
	 * @return array
	 */
	abstract public function getData();
}
