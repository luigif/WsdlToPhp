<?php
/**
 * Class file for XWebPriceAvailabilityTypeRequestPriceAvailabilityType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeRequestPriceAvailabilityType
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeRequestPriceAvailabilityType extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The Header
	 * @var XWebPriceAvailabilityTypeRequestHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebPriceAvailabilityTypeRequestDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * @var XWebPriceAvailabilityTypeRequestSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebPriceAvailabilityTypeRequestHeaderType Header
	 * @param XWebPriceAvailabilityTypeRequestDetailType Detail
	 * @param XWebPriceAvailabilityTypeRequestSummaryType Summary
	 * @return XWebPriceAvailabilityTypeRequestPriceAvailabilityType
	 */
	public function __construct($_Header = null,$_Detail = null,$_Summary = null)
	{
		parent::__construct(array('Header'=>$_Header,'Detail'=>$_Detail,'Summary'=>$_Summary));
	}
	/**
	 * Set Header
	 * @param RequestHeaderType Header
	 * @return RequestHeaderType
	 */
	public function setHeader($_Header)
	{
		return ($this->Header = $_Header);
	}
	/**
	 * Get Header
	 * @return XWebPriceAvailabilityTypeRequestHeaderType
	 */
	public function getHeader()
	{
		return $this->Header;
	}
	/**
	 * Set Detail
	 * @param RequestDetailType Detail
	 * @return RequestDetailType
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return XWebPriceAvailabilityTypeRequestDetailType
	 */
	public function getDetail()
	{
		return $this->Detail;
	}
	/**
	 * Set Summary
	 * @param RequestSummaryType Summary
	 * @return RequestSummaryType
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return XWebPriceAvailabilityTypeRequestSummaryType
	 */
	public function getSummary()
	{
		return $this->Summary;
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