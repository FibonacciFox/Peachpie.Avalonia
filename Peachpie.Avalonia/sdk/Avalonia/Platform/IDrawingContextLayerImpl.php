<?php
namespace Avalonia\Platform;
/**
 */
interface IDrawingContextLayerImpl
{
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 */
	public function Blit($context);
	/**
	 */
	public function get_CanBlit();
}
