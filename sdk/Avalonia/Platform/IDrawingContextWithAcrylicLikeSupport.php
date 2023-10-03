<?php
namespace Avalonia\Platform;
/**
 */
interface IDrawingContextWithAcrylicLikeSupport
{
	/**
	 * @param \Avalonia\Media\IExperimentalAcrylicMaterial $material
	 * @param \Avalonia\RoundedRect $rect
	 */
	public function DrawRectangle($material, $rect);
}
