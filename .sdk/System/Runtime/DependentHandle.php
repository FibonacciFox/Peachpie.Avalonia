<?php
namespace System\Runtime;
final class DependentHandle extends \System\ValueType implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAllocated;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Dependent;
	/**
	 * @property
	 * @var \System\ValueTuple_2[System\Object,System\Object]
	 * @since readonly
	 */
	public $TargetAndDependent;
	/**
	 * @return \System\Object|object
	 */
	protected function UnsafeGetTarget(){}
	/**
	 * @param \System\Object& &$dependent
	 * @return \System\Object|object
	 */
	protected function UnsafeGetTargetAndDependent(&$dependent){}
	/**
	 * @return \System\Void|void
	 */
	protected function UnsafeSetTargetToNull(){}
	/**
	 * @param \System\Object|object $dependent
	 * @return \System\Void|void
	 */
	protected function UnsafeSetDependent($dependent){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private static function InternalInitialize($target, $dependent){}
	private static function InternalGetTarget($dependentHandle){}
	private static function InternalGetDependent($dependentHandle){}
	private static function InternalGetTargetAndDependent($dependentHandle, &$dependent){}
	private static function InternalSetDependent($dependentHandle, $dependent){}
	private static function InternalSetTargetToNull($dependentHandle){}
	private static function InternalFree($dependentHandle){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Object|object $dependent
	 */
	public function __construct($target, $dependent){}
}