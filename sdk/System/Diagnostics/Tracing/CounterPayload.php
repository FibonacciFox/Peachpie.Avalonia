<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CounterPayloadMethodsOverride
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
class CounterPayload extends \System\Object implements 
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
	 * @var \System\Double
	 * @property
	 */
	public $Mean;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $StandardDeviation;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Count;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Min;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Max;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $IntervalSec;
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
	public $Metadata;
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
	 * @return \System\Double|double
	 */
	public  function get_Mean(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Mean($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_StandardDeviation(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_StandardDeviation($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Count($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Min(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Min($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Max(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Max($value){}
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
	public  function get_Metadata(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Metadata($value){}
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
	 * @uses CounterPayloadMethodsOverride::GetEnumerator_1 ()
	 * @uses CounterPayloadMethodsOverride::GetEnumerator_2 ()
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
