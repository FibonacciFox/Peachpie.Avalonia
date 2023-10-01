<?php
namespace Avalonia\Skia;
/**
 */
class TextShaperImpl extends \System\Object implements 
	\Avalonia\Platform\ITextShaperImpl
{
	/**
	 * @param \System\ReadOnlyMemory_1 $text
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $options
	 * @return \Avalonia\Media\TextFormatting\ShapedBuffer
	 */
	public  function ShapeText($text, $options){}
	/**
	 * @param \HarfBuzzSharp\Buffer $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MergeBreakPair($buffer){}
	/**
	 * @param \System\ReadOnlySpan_1 $glyphPositions
	 * @param \System\Int32|int $index
	 * @param \System\Double|double $textScale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGlyphOffset($glyphPositions, $index, $textScale){}
	/**
	 * @param \System\ReadOnlySpan_1 $glyphPositions
	 * @param \System\Int32|int $index
	 * @param \System\Double|double $textScale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGlyphAdvance($glyphPositions, $index, $textScale){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory
	 * @param \System\Int32& $start
	 * @param \System\Int32& $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetContainingMemory($memory, $start, $length){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
