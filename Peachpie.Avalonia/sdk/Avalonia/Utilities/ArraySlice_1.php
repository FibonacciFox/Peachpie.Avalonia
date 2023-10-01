<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArraySlice_1MethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\T&
	 */
	#[MethodOverride] public  function get_Item_1($index){}
	/**
	 * @return \Avalonia\Utilities\T
	 */
	#[MethodOverride] private  function get_Item_2($index){}
	/**
	 * @return \Avalonia\Utilities\ImmutableReadOnlyListStructEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ArraySlice_1 extends \System\ValueType implements 
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public static function get_Empty(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEmpty(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Start(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\Span_1
	 */
	public  function get_Span(){}
	/**
	 * @uses ArraySlice_1MethodsOverride::get_Item_1 ($index)
	 * @uses ArraySlice_1MethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @param \Avalonia\Utilities\T[] $array
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public static function op_Implicit($array){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Void|void
	 */
	public  function Fill($value){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public  function Slice($start, $length){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public  function Take($length){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public  function Skip($length){}
	/**
	 * @uses ArraySlice_1MethodsOverride::GetEnumerator_1 ()
	 * @uses ArraySlice_1MethodsOverride::GetEnumerator_2 ()
	 * @uses ArraySlice_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Count(){}
}
