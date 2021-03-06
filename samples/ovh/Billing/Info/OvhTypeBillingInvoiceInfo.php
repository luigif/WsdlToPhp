<?php
/**
 * Class file for OvhTypeBillingInvoiceInfo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingInvoiceInfo
 * @date 02/07/2012
 */
class OvhTypeBillingInvoiceInfo extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string password
	 * @param string country
	 * @return OvhTypeBillingInvoiceInfo
	 */
	public function __construct($_session = null,$_number = null,$_password = null,$_country = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'password'=>$_password,'country'=>$_country));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
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