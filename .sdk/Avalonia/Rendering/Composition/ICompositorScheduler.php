<?php
namespace Avalonia\Rendering\Composition;
interface ICompositorScheduler
{


	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \System\Void|void
	 */
	public function CommitRequested($compositor);
}