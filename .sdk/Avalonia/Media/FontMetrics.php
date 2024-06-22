<?php
namespace Avalonia\Media;
final class FontMetrics extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Int16
	 */
	public $DesignEmHeight;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsFixedPitch;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Ascent;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Descent;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $LineGap;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $LineSpacing;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $UnderlinePosition;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $UnderlineThickness;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $StrikethroughPosition;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $StrikethroughThickness;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\FontMetrics $left
	 * @param \Avalonia\Media\FontMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\FontMetrics $left
	 * @param \Avalonia\Media\FontMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}