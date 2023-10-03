<?php
namespace Avalonia\Platform;
/**
 */
interface ITextShaperImpl
{
	/**
	 * @param \System\ReadOnlyMemory_1 $text
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $options
	 */
	public function ShapeText($text, $options);
}
