<?php

/**
* Slevomat.cz/Zľavomat.sk Partner API Client.
*
* @copyright Copyright (c) 2012 Slevomat.cz, s.r.o.
* @version 1.0
* @apiVersion 1.0.1
* @link http://www.slevomat.cz/pro-partnery/voucher-api
* @link http://www.zlavomat.sk/pre-partnerov/voucher-api
*/

require_once dirname(__FILE__) . '/Abstract.php';

/**
 * Failure API response class.
 *
 * Returned when the desired operation was not successful.
 */
class Slevomat_Client_Response_Failure extends Slevomat_Client_Response_Abstract
{
	/**
	 * Raw error data.
	 *
	 * @var array
	 */
	private $data;

	/**
	 * Error code.
	 *
	 * @var integer
	 */
	private $errorCode = 0;

	/**
	 * Error message.
	 *
	 * @var string
	 */
	private $errorMessage;

	/**
	 * Parses the response data.
	 *
	 * @param array $responseData Response data
	 */
	protected function parseResponseData(array $responseData)
	{
		$this->data = $responseData['error'];

		$this->errorCode = $this->data['code'];
		$this->errorMessage = $this->data['message'];
	}

	/**
	 * Returns the raw data.
	 *
	 * @return array
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * Returns the response error code.
	 *
	 * @return integer
	 */
	public function getCode()
	{
		return $this->errorCode;
	}

	/**
	 * Returns the response error message.
	 *
	 * @return string
	 */
	public function getMessage()
	{
		return $this->errorMessage;
	}
}
