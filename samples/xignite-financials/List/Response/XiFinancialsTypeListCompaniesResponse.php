<?php
/**
 * Class file for XiFinancialsTypeListCompaniesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeListCompaniesResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeListCompaniesResponse extends XiFinancialsWsdlClass
{
	/**
	 * The ListCompaniesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeSymbolList
	 */
	public $ListCompaniesResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSymbolList ListCompaniesResult
	 * @return XiFinancialsTypeListCompaniesResponse
	 */
	public function __construct($_ListCompaniesResult = null)
	{
		parent::__construct(array('ListCompaniesResult'=>$_ListCompaniesResult));
	}
	/**
	 * Set ListCompaniesResult
	 * @param SymbolList ListCompaniesResult
	 * @return SymbolList
	 */
	public function setListCompaniesResult($_ListCompaniesResult)
	{
		return ($this->ListCompaniesResult = $_ListCompaniesResult);
	}
	/**
	 * Get ListCompaniesResult
	 * @return XiFinancialsTypeSymbolList
	 */
	public function getListCompaniesResult()
	{
		return $this->ListCompaniesResult;
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