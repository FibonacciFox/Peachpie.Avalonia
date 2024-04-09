<?php
namespace Avalonia\Media\TextFormatting;
final class GlyphInfo extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\UInt16
	 * @since readonly
	 */
	public $GlyphIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $GlyphCluster;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $GlyphAdvance;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $GlyphOffset;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\GlyphInfo $left
	 * @param \Avalonia\Media\TextFormatting\GlyphInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\GlyphInfo $left
	 * @param \Avalonia\Media\TextFormatting\GlyphInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\UInt16& &$GlyphIndex
	 * @param \System\Int32& &$GlyphCluster
	 * @param \System\Double& &$GlyphAdvance
	 * @param \Avalonia\Vector& &$GlyphOffset
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$GlyphIndex, &$GlyphCluster, &$GlyphAdvance, &$GlyphOffset){}
	/**
	 * @param \System\UInt16 $GlyphIndex
	 * @param \System\Int32|int $GlyphCluster
	 * @param \System\Double|double $GlyphAdvance
	 * @param \Avalonia\Vector $GlyphOffset
	 */
	public function __construct($GlyphIndex, $GlyphCluster, $GlyphAdvance, $GlyphOffset){}
}