<?php
namespace Avalonia\Rendering\Composition\Drawing;
interface ICompositionRenderResource
{

	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @return \System\Void|void
	 */
	public function AddRefOnCompositor($c);
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @return \System\Void|void
	 */
	public function ReleaseOnCompositor($c);
}