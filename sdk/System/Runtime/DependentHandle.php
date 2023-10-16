<?php
namespace System\Runtime;
/**
 */
class DependentHandle extends \System\ValueType implements 
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAllocated;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Target;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Dependent;
	/**
	 * @var \System\ValueTuple_2[System\Object,System\Object]
	 * @property
	 */
	public readonly $TargetAndDependent;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAllocated(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Target(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Target($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Dependent(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Dependent($value){}
	/**
	 * @return \System\ValueTuple_2
	 */
	public  function get_TargetAndDependent(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function UnsafeGetTarget(){}
	/**
	 * @param \System\Object& $dependent
	 * @return \System\Object|object
	 */
	protected  function UnsafeGetTargetAndDependent($dependent){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UnsafeSetTargetToNull(){}
	/**
	 * @param \System\Object|object $dependent
	 * @return \System\Void|void
	 */
	protected  function UnsafeSetDependent($dependent){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Object|object $dependent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalInitialize($target, $dependent){}
	/**
	 * @param \System\IntPtr $dependentHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalGetTarget($dependentHandle){}
	/**
	 * @param \System\IntPtr $dependentHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalGetDependent($dependentHandle){}
	/**
	 * @param \System\IntPtr $dependentHandle
	 * @param \System\Object& $dependent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalGetTargetAndDependent($dependentHandle, $dependent){}
	/**
	 * @param \System\IntPtr $dependentHandle
	 * @param \System\Object|object $dependent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalSetDependent($dependentHandle, $dependent){}
	/**
	 * @param \System\IntPtr $dependentHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalSetTargetToNull($dependentHandle){}
	/**
	 * @param \System\IntPtr $dependentHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalFree($dependentHandle){}
}
