<?php
namespace Avalonia\Rendering\Composition\Server;
final class DiagnosticTextRenderer extends \System\Object
{


	/**
	 * @return \System\Double|double
	 */
	public function GetMaxHeight(){}
	/**
	 * @param \System\ReadOnlySpan_1 $text [generic: System\Char]
	 * @return \Avalonia\Size
	 */
	public function MeasureAsciiText($text){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\ReadOnlySpan_1 $text [generic: System\Char]
	 * @param \Avalonia\Media\IBrush $foreground
	 * @return \System\Void|void
	 */
	public function DrawAsciiText($context, $text, $foreground){}
	/**
	 * @param \Avalonia\Media\IGlyphTypeface $typeface
	 * @param \System\Double|double $fontRenderingEmSize
	 */
	public function __construct($typeface, $fontRenderingEmSize){}
}