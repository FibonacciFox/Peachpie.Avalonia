<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReadOnlySpan_1MethodsOverride
{
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function op_Implicit_1($array){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public static function op_Implicit_2($segment){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public  function Slice_1($start){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public  function Slice_2($start, $length){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ReadOnlySpan_1 extends \System\ValueType
{
	/**
	 * @var \T&
	 * @field
	 */
	protected readonly $_reference;
	/**
	 * @var \T&
	 * @property
	 */
	public readonly $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEmpty;
	/**
	 * @var \System\ReadOnlySpan_1[T]
	 * @property
	 */
	public readonly $Empty;
	/**
	 * @param \System\Int32|int $index
	 * @return \System\T&
	 */
	public  function get_Item($index){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEmpty(){}
	/**
	 * @param \System\ReadOnlySpan_1 $left
	 * @param \System\ReadOnlySpan_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses ReadOnlySpan_1MethodsOverride::op_Implicit_1 ($array)
	 * @uses ReadOnlySpan_1MethodsOverride::op_Implicit_2 ($segment)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Implicit(mixed ...$args){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public static function get_Empty(){}
	/**
	 * @return \System\Enumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @return \System\T&
	 */
	public  function GetPinnableReference(){}
	/**
	 * @param \System\Span_1 $destination
	 * @return \System\Void|void
	 */
	public  function CopyTo($destination){}
	/**
	 * @param \System\Span_1 $destination
	 * @return \System\Boolean
	 */
	public  function TryCopyTo($destination){}
	/**
	 * @param \System\ReadOnlySpan_1 $left
	 * @param \System\ReadOnlySpan_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses ReadOnlySpan_1MethodsOverride::Slice_1 ($start)
	 * @uses ReadOnlySpan_1MethodsOverride::Slice_2 ($start, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Slice(mixed ...$args){}
	/**
	 * @return \System\T[]
	 */
	public  function ToArray(){}
}
