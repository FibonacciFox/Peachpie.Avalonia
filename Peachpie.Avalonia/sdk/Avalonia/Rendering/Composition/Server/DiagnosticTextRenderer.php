<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 */
class DiagnosticTextRenderer extends \System\Object
{
	/**
	 * @return \System\Double|double
	 */
	public  function GetMaxHeight(){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @return \Avalonia\Size
	 */
	public  function MeasureAsciiText($text){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\ReadOnlySpan_1 $text
	 * @param \Avalonia\Media\IBrush $foreground
	 * @return \System\Void|void
	 */
	public  function DrawAsciiText($context, $text, $foreground){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
