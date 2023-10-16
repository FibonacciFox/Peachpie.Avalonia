<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ValueStringBuilderMethodsOverride
{
	/**
	 * @return \System\Char&
	 */
	#[MethodOverride] public  function GetPinnableReference_1(){}
	/**
	 * @return \System\Char&
	 */
	#[MethodOverride] public  function GetPinnableReference_2($terminate){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public  function AsSpan_1($terminate){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public  function AsSpan_2(){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public  function AsSpan_3($start){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] public  function AsSpan_4($start, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Insert_1($index, $value, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Insert_2($index, $s){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Append_1($c){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Append_2($s){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Append_3($c, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Append_4($value){}
}
/**
 */
class ValueStringBuilder extends \System\ValueType
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
	 * @var \System\Char&
	 * @property
	 */
	public readonly $Item;
	/**
	 * @var \System\Span_1[System\Char]
	 * @property
	 */
	public readonly $RawChars;
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
	 * @param \System\Int32|int $capacity
	 * @return \System\Void|void
	 */
	public  function EnsureCapacity($capacity){}
	/**
	 * @uses ValueStringBuilderMethodsOverride::GetPinnableReference_1 ()
	 * @uses ValueStringBuilderMethodsOverride::GetPinnableReference_2 ($terminate)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetPinnableReference(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Char&
	 */
	public  function get_Item($index){}
	/**
	 * @return \System\Span_1
	 */
	public  function get_RawChars(){}
	/**
	 * @uses ValueStringBuilderMethodsOverride::AsSpan_1 ($terminate)
	 * @uses ValueStringBuilderMethodsOverride::AsSpan_2 ()
	 * @uses ValueStringBuilderMethodsOverride::AsSpan_3 ($start)
	 * @uses ValueStringBuilderMethodsOverride::AsSpan_4 ($start, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AsSpan(mixed ...$args){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public  function TryCopyTo($destination, $charsWritten){}
	/**
	 * @uses ValueStringBuilderMethodsOverride::Insert_1 ($index, $value, $count)
	 * @uses ValueStringBuilderMethodsOverride::Insert_2 ($index, $s)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses ValueStringBuilderMethodsOverride::Append_1 ($c)
	 * @uses ValueStringBuilderMethodsOverride::Append_2 ($s)
	 * @uses ValueStringBuilderMethodsOverride::Append_3 ($c, $count)
	 * @uses ValueStringBuilderMethodsOverride::Append_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Append(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendSlow($s){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Span_1
	 */
	public  function AppendSpan($length){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GrowAndAppend($c){}
	/**
	 * @param \System\Int32|int $additionalCapacityBeyondPos
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Grow($additionalCapacityBeyondPos){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Void|void
	 */
	public  function AppendReversed($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reverse(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
}
