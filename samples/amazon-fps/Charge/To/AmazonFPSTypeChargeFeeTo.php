<?php
/**
 * Class file for AmazonFPSTypeChargeFeeTo
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeChargeFeeTo
 * @date 10/07/2012
 */
class AmazonFPSTypeChargeFeeTo extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'Caller'
	 * @return string 'Caller'
	 */
	const VALUE_CALLER = 'Caller';
	/**
	 * Constant for value 'Recipient'
	 * @return string 'Recipient'
	 */
	const VALUE_RECIPIENT = 'Recipient';
	/**
	 * Constructor
	 * @return AmazonFPSTypeChargeFeeTo
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_CALLER,self::VALUE_RECIPIENT));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>