<?php
namespace Avalonia\Rendering\SceneGraph;
interface ICustomDrawOperation
{

	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	public function HitTest($p);
	/**
	 * @param \Avalonia\Media\ImmediateDrawingContext $context
	 * @return \System\Void|void
	 */
	public function Render($context);
}