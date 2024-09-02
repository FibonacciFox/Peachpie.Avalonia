<?php
namespace Avalonia\Media\Immutable;
class ImmutableTextDecoration extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecorationLocation
	 * @since readonly
	 */
	public $Location;
	/**
	 * @property
	 * @var \Avalonia\Media\Immutable\ImmutablePen
	 * @since readonly
	 */
	public $Pen;
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecorationUnit
	 * @since readonly
	 */
	public $PenThicknessUnit;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $PenOffset;
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecorationUnit
	 * @since readonly
	 */
	public $PenOffsetUnit;
	/**
	 * @param \Avalonia\Media\TextDecorationLocation $location
	 * @param \Avalonia\Media\Immutable\ImmutablePen $pen
	 * @param \Avalonia\Media\TextDecorationUnit $penThicknessUnit
	 * @param \System\Double|double $penOffset
	 * @param \Avalonia\Media\TextDecorationUnit $penOffsetUnit
	 */
	public function __construct($location, $pen, $penThicknessUnit, $penOffset, $penOffsetUnit){}
}