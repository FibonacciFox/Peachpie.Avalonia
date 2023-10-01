<?php
namespace Avalonia\Rendering\Composition;
/**
 */
interface ICompositorScheduler
{
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 */
	public function CommitRequested($compositor);
}
