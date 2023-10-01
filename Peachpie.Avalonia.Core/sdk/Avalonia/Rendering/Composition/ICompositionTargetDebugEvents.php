<?php
namespace Avalonia\Rendering\Composition;
/**
 */
interface ICompositionTargetDebugEvents
{
	/**
	 */
	public function get_RenderedVisuals();
	/**
	 */
	public function IncrementRenderedVisuals();
	/**
	 * @param \Avalonia\Rect $rc
	 */
	public function RectInvalidated($rc);
}
