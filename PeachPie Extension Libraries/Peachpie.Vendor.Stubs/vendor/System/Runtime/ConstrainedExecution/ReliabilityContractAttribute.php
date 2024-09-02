<?php
namespace System\Runtime\ConstrainedExecution;
final class ReliabilityContractAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Runtime\ConstrainedExecution\Consistency
	 * @since readonly
	 */
	public $ConsistencyGuarantee;
	/**
	 * @property
	 * @var \System\Runtime\ConstrainedExecution\Cer
	 * @since readonly
	 */
	public $Cer;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Runtime\ConstrainedExecution\Consistency $consistencyGuarantee
	 * @param \System\Runtime\ConstrainedExecution\Cer $cer
	 */
	public function __construct($consistencyGuarantee, $cer){}
}