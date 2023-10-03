<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SpanVectorMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_1($first, $length, $element){}
	/**
	 * @return \Avalonia\Utilities\SpanPosition
	 */
	#[MethodOverride] public  function SetValue_2($first, $length, $element, $spanPosition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetReference_1($first, $length, $element){}
	/**
	 * @return \Avalonia\Utilities\SpanPosition
	 */
	#[MethodOverride] public  function SetReference_2($first, $length, $element, $spanPosition){}
}
/**
 */
class SpanVector extends \System\Object implements 
	\System\Collections\IEnumerable
{
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @param \Avalonia\Utilities\Span $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Add($span){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \Avalonia\Utilities\SpanPosition& $latestPosition
	 * @return \System\Void|void
	 */
	protected  function Delete($index, $count, $latestPosition){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DeleteInternal($index, $count){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Insert($index, $count){}
	/**
	 * @param \System\Int32|int $cp
	 * @param \Avalonia\Utilities\SpanPosition $latestPosition
	 * @param \Avalonia\Utilities\SpanPosition& $spanPosition
	 * @return \System\Boolean
	 */
	protected  function FindSpan($cp, $latestPosition, $spanPosition){}
	/**
	 * @uses SpanVectorMethodsOverride::SetValue_1 ($first, $length, $element)
	 * @uses SpanVectorMethodsOverride::SetValue_2 ($first, $length, $element, $spanPosition)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses SpanVectorMethodsOverride::SetReference_1 ($first, $length, $element)
	 * @uses SpanVectorMethodsOverride::SetReference_2 ($first, $length, $element, $spanPosition)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetReference(mixed ...$args){}
	/**
	 * @param \System\Int32|int $first
	 * @param \System\Int32|int $length
	 * @param \System\Object|object $element
	 * @param \Avalonia\Utilities\Equals $equals
	 * @param \Avalonia\Utilities\SpanPosition $spanPosition
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Set($first, $length, $element, $equals, $spanPosition){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Default(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Utilities\Span
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $targetCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Resize($targetCount){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
