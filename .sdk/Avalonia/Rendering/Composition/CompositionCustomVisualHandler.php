<?php
namespace Avalonia\Rendering\Composition;
class CompositionCustomVisualHandler extends \System\Object
{

	/**
	 * @param \System\Object|object $message
	 * @return \System\Void|void
	 */
	public function OnMessage($message){}
	/**
	 * @return \System\Void|void
	 */
	public function OnAnimationFrameUpdate(){}
	/**
	 * @param \Avalonia\Media\ImmediateDrawingContext $drawingContext
	 * @return \System\Void|void
	 */
	abstract public function OnRender($drawingContext);
	private function VerifyAccess(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public function GetRenderBounds(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionCustomVisual $visual
	 * @return \System\Void|void
	 */
	protected function Attach($visual){}
	/**
	 * @return \System\Void|void
	 */
	protected function Invalidate(){}
	/**
	 * @return \System\Void|void
	 */
	protected function RegisterForNextAnimationFrameUpdate(){}
}