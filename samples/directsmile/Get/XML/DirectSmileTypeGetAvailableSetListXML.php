<?php
/**
 * Class file for DirectSmileTypeGetAvailableSetListXML
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableSetListXML
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableSetListXML extends DirectSmileWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * Constructor
	 * @param string SessionID
	 * @return DirectSmileTypeGetAvailableSetListXML
	 */
	public function __construct($_SessionID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
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