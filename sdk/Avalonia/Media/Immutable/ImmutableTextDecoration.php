<?php
namespace Avalonia\Media\Immutable;
/**
 */
class ImmutableTextDecoration extends \System\Object
{
	/**
	 * @var \Avalonia\Media\TextDecorationLocation
	 * @property
	 */
	public readonly $Location;
	/**
	 * @var \Avalonia\Media\Immutable\ImmutablePen
	 * @property
	 */
	public readonly $Pen;
	/**
	 * @var \Avalonia\Media\TextDecorationUnit
	 * @property
	 */
	public readonly $PenThicknessUnit;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $PenOffset;
	/**
	 * @var \Avalonia\Media\TextDecorationUnit
	 * @property
	 */
	public readonly $PenOffsetUnit;
	/**
	 * @return \Avalonia\Media\TextDecorationLocation
	 */
	public  function get_Location(){}
	/**
	 * @return \Avalonia\Media\Immutable\ImmutablePen
	 */
	public  function get_Pen(){}
	/**
	 * @return \Avalonia\Media\TextDecorationUnit
	 */
	public  function get_PenThicknessUnit(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_PenOffset(){}
	/**
	 * @return \Avalonia\Media\TextDecorationUnit
	 */
	public  function get_PenOffsetUnit(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
