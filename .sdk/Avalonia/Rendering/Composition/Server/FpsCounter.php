<?php
namespace Avalonia\Rendering\Composition\Server;
class FpsCounter extends \System\Object
{

	/**
	 * @return \System\Void|void
	 */
	public function FpsTick(){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\String|string $aux
	 * @return \System\Void|void
	 */
	public function RenderFps($context, $aux){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\DiagnosticTextRenderer $textRenderer
	 */
	public function __construct($textRenderer){}
}