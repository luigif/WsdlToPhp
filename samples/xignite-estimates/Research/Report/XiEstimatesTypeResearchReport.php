<?php
/**
 * Class file for XiEstimatesTypeResearchReport
 * @date 08/07/2012
 */
/**
 * Class XiEstimatesTypeResearchReport
 * @date 08/07/2012
 */
class XiEstimatesTypeResearchReport extends XiEstimatesTypeAbstractZacksObject
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The ResearchReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeResearchReportTypes
	 */
	public $ResearchReportType;
	/**
	 * The ResearchReportLines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEstimatesTypeArrayOfResearchReportLine
	 */
	public $ResearchReportLines;
	/**
	 * Constructor
	 * @param string Title
	 * @param string AsOfDate
	 * @param XiEstimatesTypeResearchReportTypes ResearchReportType
	 * @param XiEstimatesTypeArrayOfResearchReportLine ResearchReportLines
	 * @return XiEstimatesTypeResearchReport
	 */
	public function __construct($_Title = null,$_AsOfDate = null,$_ResearchReportType,$_ResearchReportLines = null)
	{
		XiEstimatesWsdlClass::__construct(array('Title'=>$_Title,'AsOfDate'=>$_AsOfDate,'ResearchReportType'=>$_ResearchReportType,'ResearchReportLines'=>new XiEstimatesTypeArrayOfResearchReportLine($_ResearchReportLines)));
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set ResearchReportType
	 * @param ResearchReportTypes ResearchReportType
	 * @return ResearchReportTypes
	 */
	public function setResearchReportType($_ResearchReportType)
	{
		return ($this->ResearchReportType = XiEstimatesTypeResearchReportTypes::valueIsValid($_ResearchReportType)?$_ResearchReportType:null);
	}
	/**
	 * Get ResearchReportType
	 * @return XiEstimatesTypeResearchReportTypes
	 */
	public function getResearchReportType()
	{
		return $this->ResearchReportType;
	}
	/**
	 * Set ResearchReportLines
	 * @param ArrayOfResearchReportLine ResearchReportLines
	 * @return ArrayOfResearchReportLine
	 */
	public function setResearchReportLines($_ResearchReportLines)
	{
		return ($this->ResearchReportLines = $_ResearchReportLines);
	}
	/**
	 * Get ResearchReportLines
	 * @return XiEstimatesTypeArrayOfResearchReportLine
	 */
	public function getResearchReportLines()
	{
		return $this->ResearchReportLines;
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