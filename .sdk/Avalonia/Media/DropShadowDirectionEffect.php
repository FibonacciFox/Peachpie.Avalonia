<?php
namespace Avalonia\Media;
final class DropShadowDirectionEffect extends \Avalonia\Media\DropShadowEffectBase implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IAffectsRender,
	\Avalonia\Media\IDirectionDropShadowEffect,
	\Avalonia\Media\IDropShadowEffect,
	\Avalonia\Media\IEffect,
	\Avalonia\Media\IMutableEffect
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $ShadowDepthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $DirectionProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ShadowDepth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Direction;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $OffsetX;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
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
	 * @property dublicate
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