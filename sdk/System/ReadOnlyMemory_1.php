<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReadOnlyMemory_1MethodsOverride
{
	/**
	 * @return \System\ReadOnlyMemory_1
	 */
	#[MethodOverride] public static function op_Implicit_1($array){}
	/**
	 * @return \System\ReadOnlyMemory_1
	 */
	#[MethodOverride] public static function op_Implicit_2($segment){}
	/**
	 * @return \System\ReadOnlyMemory_1
	 */
	#[MethodOverride] public  function Slice_1($start){}
	/**
	 * @return \System\ReadOnlyMemory_1
	 */
	#[MethodOverride] public  function Slice_2($start, $length){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ReadOnlyMemory_1 extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $RemoveFlagsBitMask;
	/**
	 * @var \System\ReadOnlyMemory_1[T]
	 * @property
	 */
	public readonly $Empty;
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
	public readonly $Span;
	/**
	 * @uses ReadOnlyMemory_1MethodsOverride::op_Implicit_1 ($array)
	 * @uses ReadOnlyMemory_1MethodsOverride::op_Implicit_2 ($segment)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Implicit(mixed ...$args){}
	/**
	 * @return \System\ReadOnlyMemory_1
	 */
	public static function get_Empty(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEmpty(){}
	/**
	 * @uses ReadOnlyMemory_1MethodsOverride::Slice_1 ($start)
	 * @uses ReadOnlyMemory_1MethodsOverride::Slice_2 ($start, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Slice(mixed ...$args){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function get_Span(){}
	/**
	 * @param \System\Memory_1 $destination
	 * @return \System\Void|void
	 */
	public  function CopyTo($destination){}
	/**
	 * @param \System\Memory_1 $destination
	 * @return \System\Boolean
	 */
	public  function TryCopyTo($destination){}
	/**
	 * @return \System\Buffers\MemoryHandle
	 */
	public  function Pin(){}
	/**
	 * @return \System\T[]
	 */
	public  function ToArray(){}
	/**
	 * @uses ReadOnlyMemory_1MethodsOverride::Equals_1 ($obj)
	 * @uses ReadOnlyMemory_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Int32& $start
	 * @param \System\Int32& $length
	 * @return \System\Object|object
	 */
	protected  function GetObjectStartLength($start, $length){}
}
