<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 */
interface IServerRenderResource
{
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver $observer
	 */
	public function AddObserver($observer);
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver $observer
	 */
	public function RemoveObserver($observer);
	/**
	 */
	public function QueuedInvalidate();
}
