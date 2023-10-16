<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IncrementingCounterPayloadMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 */
class IncrementingCounterPayload extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DisplayName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DisplayRateTimeScale;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Increment;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $IntervalSec;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Metadata;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Series;
	/**
	 * @var \System\String
	 * @property
	 */
	public $CounterType;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DisplayUnits;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Name($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DisplayName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayName($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DisplayRateTimeScale(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayRateTimeScale($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Increment(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Increment($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_IntervalSec(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	protected  function set_IntervalSec($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Metadata(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Metadata($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Series(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Series($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CounterType(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_CounterType($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DisplayUnits(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayUnits($value){}
	/**
	 * @uses IncrementingCounterPayloadMethodsOverride::GetEnumerator_1 ()
	 * @uses IncrementingCounterPayloadMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ForEnumeration(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
