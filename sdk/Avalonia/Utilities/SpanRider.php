<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SpanRiderMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function At_1($cp){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function At_2($latestPosition, $cp){}
}
/**
 */
class SpanRider extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentSpanStart;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Length;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $CurrentPosition;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $CurrentElement;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentSpanIndex;
	/**
	 * @var \Avalonia\Utilities\SpanPosition
	 * @property
	 */
	public readonly $SpanPosition;
	/**
	 * @uses SpanRiderMethodsOverride::At_1 ($cp)
	 * @uses SpanRiderMethodsOverride::At_2 ($latestPosition, $cp)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function At(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentSpanStart(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Length($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentPosition(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CurrentPosition($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_CurrentElement(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentSpanIndex(){}
	/**
	 * @return \Avalonia\Utilities\SpanPosition
	 */
	public  function get_SpanPosition(){}
}
