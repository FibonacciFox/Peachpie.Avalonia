<?php
namespace Avalonia\Platform;
interface ITextShaperImpl
{


	/**
	 * @param \System\ReadOnlyMemory_1 $text [generic: System\Char]
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $options
	 * @return \Avalonia\Media\TextFormatting\ShapedBuffer
	 */
	public function ShapeText($text, $options);
}