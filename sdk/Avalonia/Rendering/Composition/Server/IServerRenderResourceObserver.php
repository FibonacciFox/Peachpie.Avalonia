<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 */
interface IServerRenderResourceObserver
{
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResource $sender
	 */
	public function DependencyQueuedInvalidate($sender);
}
