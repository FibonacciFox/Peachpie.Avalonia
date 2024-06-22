<?php
namespace Avalonia\Rendering\Composition;
interface ICompositionTargetDebugEvents
{


	/**
	 * @return \System\Void|void
	 */
	public function IncrementRenderedVisuals();
	/**
	 * @param \Avalonia\Rect $rc
	 * @return \System\Void|void
	 */
	public function RectInvalidated($rc);
}