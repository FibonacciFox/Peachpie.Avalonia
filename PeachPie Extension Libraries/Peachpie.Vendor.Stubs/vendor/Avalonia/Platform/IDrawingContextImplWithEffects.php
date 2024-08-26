<?php
namespace Avalonia\Platform;
interface IDrawingContextImplWithEffects
{

	/**
	 * @param \Avalonia\Media\IEffect $effect
	 * @return \System\Void|void
	 */
	public function PushEffect($effect);
	/**
	 * @return \System\Void|void
	 */
	public function PopEffect();
}