<?php
namespace Avalonia\Media;
final class DropShadowEffect extends \Avalonia\Media\DropShadowEffectBase implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IAffectsRender,
	\Avalonia\Media\IDropShadowEffect,
	\Avalonia\Media\IEffect,
	\Avalonia\Media\IMutableEffect
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $OffsetXProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $OffsetYProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $OffsetX;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $OffsetY;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $BlurRadius;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 */
	public $Color;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Animation\Transitions
	 */
	public $Transitions;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @return \Avalonia\Media\IImmutableEffect
	 */
	public function ToImmutable(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}