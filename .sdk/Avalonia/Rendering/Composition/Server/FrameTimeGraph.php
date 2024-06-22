<?php
namespace Avalonia\Rendering\Composition\Server;
final class FrameTimeGraph extends \System\Object
{

	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $Size;
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public function AddFrameValue($value){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @return \System\Void|void
	 */
	public function Render($context){}
	private function DrawLabelledValue($context, $label, $value, &$originalTransform, $left){}
	private function BuildGraphGeometry($maxY){}
	private function GetYValues(){}
	private function GetFrameValue($frameOffset){}
	/**
	 * @param \System\Int32|int $maxFrames
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $defaultMaxY
	 * @param \System\String|string $title
	 * @param \Avalonia\Rendering\Composition\Server\DiagnosticTextRenderer $textRenderer
	 */
	public function __construct($maxFrames, $size, $defaultMaxY, $title, $textRenderer){}
}