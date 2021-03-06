<?php
/**
 * Class file for AmazonEc2TypeMonitorInstancesResponseSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeMonitorInstancesResponseSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeMonitorInstancesResponseSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The monitoring
	 * @var AmazonEc2TypeInstanceMonitoringStateType
	 */
	public $monitoring;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param AmazonEc2TypeInstanceMonitoringStateType monitoring
	 * @return AmazonEc2TypeMonitorInstancesResponseSetItemType
	 */
	public function __construct($_instanceId = null,$_monitoring = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'monitoring'=>$_monitoring));
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set monitoring
	 * @param InstanceMonitoringStateType monitoring
	 * @return InstanceMonitoringStateType
	 */
	public function setMonitoring($_monitoring)
	{
		return ($this->monitoring = $_monitoring);
	}
	/**
	 * Get monitoring
	 * @return AmazonEc2TypeInstanceMonitoringStateType
	 */
	public function getMonitoring()
	{
		return $this->monitoring;
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