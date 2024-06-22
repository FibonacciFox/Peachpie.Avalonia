<?php
namespace Avalonia\Rendering\Composition\Server;
interface IServerRenderResourceObserver
{


	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResource $sender
	 * @return \System\Void|void
	 */
	public function DependencyQueuedInvalidate($sender);
}