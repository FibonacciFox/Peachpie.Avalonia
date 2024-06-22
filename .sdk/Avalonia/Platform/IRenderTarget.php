<?php
namespace Avalonia\Platform;
interface IRenderTarget
{


	/**
	 * @return \Avalonia\Platform\IDrawingContextImpl
	 */
	public function CreateDrawingContext();
}