<?php
namespace Avalonia\Media;
class ImmutableDropShadowDirectionEffect extends \System\Object implements
	\Avalonia\Media\IDirectionDropShadowEffect,
	\Avalonia\Media\IDropShadowEffect,
	\Avalonia\Media\IEffect,
	\Avalonia\Media\IImmutableEffect,
	\System\IEquatable_1
{
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
	 * @since readonly
	 */
	public $Direction;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $ShadowDepth;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $BlurRadius;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 * @since readonly
	 */
	public $Color;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Opacity;
	/**
	 * @param \System\Double|double $direction
	 * @param \System\Double|double $shadowDepth
	 * @param \System\Double|double $blurRadius
	 * @param \Avalonia\Media\Color $color
	 * @param \System\Double|double $opacity
	 */
	public function __construct($direction, $shadowDepth, $blurRadius, $color, $opacity){}
}