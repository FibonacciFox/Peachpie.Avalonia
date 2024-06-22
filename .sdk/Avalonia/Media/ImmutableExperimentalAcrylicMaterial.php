<?php
namespace Avalonia\Media;
final class ImmutableExperimentalAcrylicMaterial extends \System\ValueType implements
	\Avalonia\Media\IExperimentalAcrylicMaterial,
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \Avalonia\Media\AcrylicBackgroundSource
	 * @since readonly
	 */
	public $BackgroundSource;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 * @since readonly
	 */
	public $TintColor;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 * @since readonly
	 */
	public $MaterialColor;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TintOpacity;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 * @since readonly
	 */
	public $FallbackColor;
	/**
	 * @return \Avalonia\Media\Color
	 */
	public function GetEffectiveTintColor(){}
	/**
	 * @param \Avalonia\Media\ImmutableExperimentalAcrylicMaterial $left
	 * @param \Avalonia\Media\ImmutableExperimentalAcrylicMaterial $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\ImmutableExperimentalAcrylicMaterial $left
	 * @param \Avalonia\Media\ImmutableExperimentalAcrylicMaterial $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\IExperimentalAcrylicMaterial $brush
	 */
	public function __construct($brush){}
}