<?php
namespace Avalonia\Media;
final class GlyphRunMetrics extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Baseline;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $WidthIncludingTrailingWhitespace;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Height;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $TrailingWhitespaceLength;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $NewLineLength;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $FirstCluster;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $LastCluster;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\GlyphRunMetrics $left
	 * @param \Avalonia\Media\GlyphRunMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\GlyphRunMetrics $left
	 * @param \Avalonia\Media\GlyphRunMetrics $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}