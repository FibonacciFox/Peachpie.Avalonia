<?php
namespace Avalonia\Platform;
interface IDrawingContextWithAcrylicLikeSupport
{

	/**
	 * @param \Avalonia\Media\IExperimentalAcrylicMaterial $material
	 * @param \Avalonia\RoundedRect $rect
	 * @return \System\Void|void
	 */
	public function DrawRectangle($material, $rect);
}