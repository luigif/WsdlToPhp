<?php
/**
 * Class file for XiGlobalHistoricalTypeGlobalHistoricalStatistics
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGlobalHistoricalStatistics
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGlobalHistoricalStatistics extends XiGlobalHistoricalTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The Quotes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $Quotes;
	/**
	 * The Dividends
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $Dividends;
	/**
	 * The LastDividendDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastDividendDate;
	/**
	 * The Splits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $Splits;
	/**
	 * The LastSplitDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastSplitDate;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param string StartDate
	 * @param string EndDate
	 * @param long Quotes
	 * @param long Dividends
	 * @param string LastDividendDate
	 * @param long Splits
	 * @param string LastSplitDate
	 * @return XiGlobalHistoricalTypeGlobalHistoricalStatistics
	 */
	public function __construct($_Security = null,$_StartDate = null,$_EndDate = null,$_Quotes,$_Dividends,$_LastDividendDate = null,$_Splits,$_LastSplitDate = null)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Quotes'=>$_Quotes,'Dividends'=>$_Dividends,'LastDividendDate'=>$_LastDividendDate,'Splits'=>$_Splits,'LastSplitDate'=>$_LastSplitDate));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiGlobalHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set Quotes
	 * @param long Quotes
	 * @return long
	 */
	public function setQuotes($_Quotes)
	{
		return ($this->Quotes = $_Quotes);
	}
	/**
	 * Get Quotes
	 * @return long
	 */
	public function getQuotes()
	{
		return $this->Quotes;
	}
	/**
	 * Set Dividends
	 * @param long Dividends
	 * @return long
	 */
	public function setDividends($_Dividends)
	{
		return ($this->Dividends = $_Dividends);
	}
	/**
	 * Get Dividends
	 * @return long
	 */
	public function getDividends()
	{
		return $this->Dividends;
	}
	/**
	 * Set LastDividendDate
	 * @param string LastDividendDate
	 * @return string
	 */
	public function setLastDividendDate($_LastDividendDate)
	{
		return ($this->LastDividendDate = $_LastDividendDate);
	}
	/**
	 * Get LastDividendDate
	 * @return string
	 */
	public function getLastDividendDate()
	{
		return $this->LastDividendDate;
	}
	/**
	 * Set Splits
	 * @param long Splits
	 * @return long
	 */
	public function setSplits($_Splits)
	{
		return ($this->Splits = $_Splits);
	}
	/**
	 * Get Splits
	 * @return long
	 */
	public function getSplits()
	{
		return $this->Splits;
	}
	/**
	 * Set LastSplitDate
	 * @param string LastSplitDate
	 * @return string
	 */
	public function setLastSplitDate($_LastSplitDate)
	{
		return ($this->LastSplitDate = $_LastSplitDate);
	}
	/**
	 * Get LastSplitDate
	 * @return string
	 */
	public function getLastSplitDate()
	{
		return $this->LastSplitDate;
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