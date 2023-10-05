<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArrayBuilder_1MethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride] public  function Add_1($length, $clear){}
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride] public  function Add_2($value){}
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride] public  function AsSlice_1(){}
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride] public  function AsSlice_2($length){}
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	#[MethodOverride] public  function AsSlice_3($start, $length){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ArrayBuilder_1 extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Length;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Capacity;
	/**
	 * @var \T&
	 * @property
	 */
	public readonly $Item;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Length($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Capacity(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Utilities\T&
	 */
	public  function get_Item($index){}
	/**
	 * @uses ArrayBuilder_1MethodsOverride::Add_1 ($length, $clear)
	 * @uses ArrayBuilder_1MethodsOverride::Add_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Void|void
	 */
	public  function AddItem($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearArray(){}
	/**
	 * @param \System\Int32|int $min
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCapacity($min){}
	/**
	 * @uses ArrayBuilder_1MethodsOverride::AsSlice_1 ()
	 * @uses ArrayBuilder_1MethodsOverride::AsSlice_2 ($length)
	 * @uses ArrayBuilder_1MethodsOverride::AsSlice_3 ($start, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AsSlice(mixed ...$args){}
	/**
	 * @return \System\Span_1
	 */
	public  function AsSpan(){}
}
