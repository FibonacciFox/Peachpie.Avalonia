<?php
namespace Avalonia\Media;
final class GlyphMetrics extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $XBearing;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $YBearing;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Height;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\GlyphMetrics $left
	 * @param \Avalonia\Media\GlyphMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\GlyphMetrics $left
	 * @param \Avalonia\Media\GlyphMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}