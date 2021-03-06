<?php
/**
 * Class file for AmazonEc2TypeNullableAttributeBooleanValueType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNullableAttributeBooleanValueType
 * @date 10/07/2012
 */
class AmazonEc2TypeNullableAttributeBooleanValueType extends AmazonEc2WsdlClass
{
	/**
	 * The value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $value;
	/**
	 * Constructor
	 * @param boolean value
	 * @return AmazonEc2TypeNullableAttributeBooleanValueType
	 */
	public function __construct($_value = null)
	{
		parent::__construct(array('value'=>$_value));
	}
	/**
	 * Set value
	 * @param boolean value
	 * @return boolean
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return boolean
	 */
	public function getValue()
	{
		return $this->value;
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