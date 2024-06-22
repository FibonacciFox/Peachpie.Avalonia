<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PointerPointPropertiesOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 * @param \Avalonia\Input\PointerUpdateKind $kind
	 */
	#[MethodOverride]public function __construct_2 ($modifiers, $kind){}
	/**
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 * @param \Avalonia\Input\PointerUpdateKind $kind
	 * @param \System\Single $twist
	 * @param \System\Single $pressure
	 * @param \System\Single $xTilt
	 * @param \System\Single $yTilt
	 */
	#[MethodOverride]public function __construct_3 ($modifiers, $kind, $twist, $pressure, $xTilt, $yTilt){}
}
final class PointerPointProperties extends \System\ValueType implements
	\System\IEquatable_1
{
	use PointerPointPropertiesOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLeftButtonPressed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMiddleButtonPressed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsRightButtonPressed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsXButton1Pressed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsXButton2Pressed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsBarrelButtonPressed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEraser;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInverted;
	/**
	 * @property
	 * @var \System\Single
	 * @since readonly
	 */
	public $Twist;
	/**
	 * @property
	 * @var \System\Single
	 * @since readonly
	 */
	public $Pressure;
	/**
	 * @property
	 * @var \System\Single
	 * @since readonly
	 */
	public $XTilt;
	/**
	 * @property
	 * @var \System\Single
	 * @since readonly
	 */
	public $YTilt;
	/**
	 * @property
	 * @var \Avalonia\Input\PointerUpdateKind
	 * @since readonly
	 */
	public $PointerUpdateKind;
	/**
	 * @property
	 * @var \Avalonia\Input\PointerPointProperties
	 * @since readonly
	 */
	public $None;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\PointerPointProperties $left
	 * @param \Avalonia\Input\PointerPointProperties $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\PointerPointProperties $left
	 * @param \Avalonia\Input\PointerPointProperties $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses PointerPointPropertiesOverride::__construct_1 <br>public , args: ()<br>
	 * @uses PointerPointPropertiesOverride::__construct_2 <br>public , args: ($modifiers, $kind)<br>
	 * @uses PointerPointPropertiesOverride::__construct_3 <br>public , args: ($modifiers, $kind, $twist, $pressure, $xTilt, $yTilt)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}