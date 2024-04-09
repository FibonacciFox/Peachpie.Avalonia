<?php
namespace Avalonia\Platform;
final class RuntimePlatformInfo extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \Avalonia\Platform\FormFactorType
	 * @since readonly
	 */
	public $FormFactor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsDesktop;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsMobile;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Platform\RuntimePlatformInfo $left
	 * @param \Avalonia\Platform\RuntimePlatformInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Platform\RuntimePlatformInfo $left
	 * @param \Avalonia\Platform\RuntimePlatformInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}