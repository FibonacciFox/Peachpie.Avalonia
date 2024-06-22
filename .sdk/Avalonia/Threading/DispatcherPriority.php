<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DispatcherPriorityOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function op_Implicit_1 ($priority){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \Avalonia\Threading\DispatcherPriority
	 */
	#[MethodOverride]public static function op_Implicit_2 ($value){}
}
final class DispatcherPriority extends \System\ValueType implements
	\System\IEquatable_1,
	\System\IComparable_1
{
	use DispatcherPriorityOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $Default;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	protected static $MinimumForegroundPriority;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $Input;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $Background;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $ContextIdle;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $ApplicationIdle;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $SystemIdle;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	protected static $MinimumActiveValue;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $Inactive;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	protected static $MinValue;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $Invalid;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $Loaded;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $UiThreadRender;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	protected static $AfterRender;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $Render;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $BeforeRender;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $AsyncRenderTargetResize;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $DataBind;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $Normal;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $Send;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	public static $MaxValue;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \System\Int32|int $value
	 * @return \Avalonia\Threading\DispatcherPriority
	 */
	public static function FromValue($value){}
	/**
	 * @uses DispatcherPriorityOverride::op_Implicit_1 <br>public , args: ($priority)<br>
	 * @uses DispatcherPriorityOverride::op_Implicit_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\Avalonia\Threading\DispatcherPriority|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $left
	 * @param \Avalonia\Threading\DispatcherPriority $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $other
	 * @return \System\Int32|int
	 */
	public function CompareTo($other){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\String|string $parameterName
	 * @return \System\Void|void
	 */
	public static function Validate($priority, $parameterName){}
}