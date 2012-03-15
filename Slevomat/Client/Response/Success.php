<?php

/**
* Slevomat.cz/Zľavomat.sk Partner API Client.
*
* @copyright Copyright (c) 2012 Slevomat.cz, s.r.o.
* @version 1.0.1
* @apiVersion 1.0.1
* @link http://www.slevomat.cz/pro-partnery/voucher-api
* @link http://www.zlavomat.sk/pre-partnerov/voucher-api
*/

require_once dirname(__FILE__) . '/Abstract.php';

/**
 * Success API response class.
 *
 * Returned when the desired operation was successful.
 */
class Slevomat_Client_Response_Success extends Slevomat_Client_Response_Abstract implements IteratorAggregate
{
	/**
	 * Raw error data.
	 *
	 * @var array
	 */
	private $data;

	/**
	 * Parses the response data.
	 *
	 * @param array $responseData Response data
	 */
	protected function parseResponseData(array $responseData)
	{
		$this->data = $responseData['data'];
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
	 * Create an iterator over the response data.
	 *
	 * @return ArrayIterator
	 */
	public function getIterator()
	{
		return new ArrayIterator($this->data);
	}
}
