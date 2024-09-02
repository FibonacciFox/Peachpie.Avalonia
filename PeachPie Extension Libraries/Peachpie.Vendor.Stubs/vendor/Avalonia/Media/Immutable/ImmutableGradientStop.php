<?php
namespace Avalonia\Media\Immutable;
class ImmutableGradientStop extends \System\Object implements
	\Avalonia\Media\IGradientStop
{
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Offset;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 * @since readonly
	 */
	public $Color;
	/**
	 * @param \System\Double|double $offset
	 * @param \Avalonia\Media\Color $color
	 */
	public function __construct($offset, $color){}
}