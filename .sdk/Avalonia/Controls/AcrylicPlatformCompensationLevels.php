<?php
namespace Avalonia\Controls;
final class AcrylicPlatformCompensationLevels extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TransparentLevel;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $BlurLevel;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $AcrylicBlurLevel;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Controls\AcrylicPlatformCompensationLevels $left
	 * @param \Avalonia\Controls\AcrylicPlatformCompensationLevels $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Controls\AcrylicPlatformCompensationLevels $left
	 * @param \Avalonia\Controls\AcrylicPlatformCompensationLevels $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Double|double $transparent
	 * @param \System\Double|double $blurred
	 * @param \System\Double|double $acrylic
	 */
	public function __construct($transparent, $blurred, $acrylic){}
}