<?php
namespace System\Runtime\ConstrainedExecution;
/**
 */
class ReliabilityContractAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\ConstrainedExecution\Consistency
	 * @property
	 */
	public readonly $ConsistencyGuarantee;
	/**
	 * @var \System\Runtime\ConstrainedExecution\Cer
	 * @property
	 */
	public readonly $Cer;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\ConstrainedExecution\Consistency
	 */
	public  function get_ConsistencyGuarantee(){}
	/**
	 * @return \System\Runtime\ConstrainedExecution\Cer
	 */
	public  function get_Cer(){}
}
