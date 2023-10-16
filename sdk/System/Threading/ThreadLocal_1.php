<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThreadLocal_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ThreadLocal_1 extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \T
	 * @property
	 */
	public $Value;
	/**
	 * @var \System\Collections\Generic\IList_1[T]
	 * @property
	 */
	public readonly $Values;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsValueCreated;
	/**
	 * @param \System\Func_1 $valueFactory
	 * @param \System\Boolean $trackAllValues
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($valueFactory, $trackAllValues){}
	/**
	 * @uses ThreadLocal_1MethodsOverride::Dispose_1 ()
	 * @uses ThreadLocal_1MethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Threading\T
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Threading\T $value
	 * @return \System\Void|void
	 */
	public  function set_Value($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValueSlow(){}
	/**
	 * @param \System\Threading\T $value
	 * @param \System\Threading\LinkedSlotVolatile[] $slotArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetValueSlow($value, $slotArray){}
	/**
	 * @param \System\Threading\LinkedSlotVolatile[] $slotArray
	 * @param \System\Int32|int $id
	 * @param \System\Threading\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateLinkedSlot($slotArray, $id, $value){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_Values(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValuesAsList(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ValuesCountForDebugDisplay(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsValueCreated(){}
	/**
	 * @return \System\Threading\T
	 */
	protected  function get_ValueForDebugDisplay(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	protected  function get_ValuesForDebugDisplay(){}
	/**
	 * @param \System\Threading\LinkedSlotVolatile[]& $table
	 * @param \System\Int32|int $minLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GrowTable($table, $minLength){}
	/**
	 * @param \System\Int32|int $minSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNewTableSize($minSize){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
