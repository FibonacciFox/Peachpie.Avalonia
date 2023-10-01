<?php
namespace Avalonia\Platform;
/**
 */
interface IDrawingContextImplWithEffects
{
	/**
	 * @param \Avalonia\Media\IEffect $effect
	 */
	public function PushEffect($effect);
	/**
	 */
	public function PopEffect();
}
