<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 */
interface ICompositionRenderResource
{
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 */
	public function AddRefOnCompositor($c);
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 */
	public function ReleaseOnCompositor($c);
}
