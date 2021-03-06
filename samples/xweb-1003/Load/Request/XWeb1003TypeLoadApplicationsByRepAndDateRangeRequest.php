<?php
/**
 * Class file for XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest
 * @date 09/07/2012
 */
class XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest extends XWeb1003WsdlClass
{
	/**
	 * The Rep_Identifier
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Rep_Identifier;
	/**
	 * The Date_Start
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $Date_Start;
	/**
	 * The Date_End
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $Date_End;
	/**
	 * Constructor
	 * @param string Rep_Identifier
	 * @param dateTime Date_Start
	 * @param dateTime Date_End
	 * @return XWeb1003TypeLoadApplicationsByRepAndDateRangeRequest
	 */
	public function __construct($_Rep_Identifier,$_Date_Start,$_Date_End)
	{
		parent::__construct(array('Rep_Identifier'=>$_Rep_Identifier,'Date_Start'=>$_Date_Start,'Date_End'=>$_Date_End));
	}
	/**
	 * Set Rep_Identifier
	 * @param string Rep_Identifier
	 * @return string
	 */
	public function setRep_Identifier($_Rep_Identifier)
	{
		return ($this->Rep_Identifier = $_Rep_Identifier);
	}
	/**
	 * Get Rep_Identifier
	 * @return string
	 */
	public function getRep_Identifier()
	{
		return $this->Rep_Identifier;
	}
	/**
	 * Set Date_Start
	 * @param dateTime Date_Start
	 * @return dateTime
	 */
	public function setDate_Start($_Date_Start)
	{
		return ($this->Date_Start = $_Date_Start);
	}
	/**
	 * Get Date_Start
	 * @return dateTime
	 */
	public function getDate_Start()
	{
		return $this->Date_Start;
	}
	/**
	 * Set Date_End
	 * @param dateTime Date_End
	 * @return dateTime
	 */
	public function setDate_End($_Date_End)
	{
		return ($this->Date_End = $_Date_End);
	}
	/**
	 * Get Date_End
	 * @return dateTime
	 */
	public function getDate_End()
	{
		return $this->Date_End;
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