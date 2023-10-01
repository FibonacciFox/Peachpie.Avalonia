<?php
namespace Avalonia\Rendering\SceneGraph;
/**
 */
interface ICustomDrawOperation
{
	/**
	 */
	public function get_Bounds();
	/**
	 * @param \Avalonia\Point $p
	 */
	public function HitTest($p);
	/**
	 * @param \Avalonia\Media\ImmediateDrawingContext $context
	 */
	public function Render($context);
}
