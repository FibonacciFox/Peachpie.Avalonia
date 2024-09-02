<?php
namespace Avalonia\Rendering\Composition\Server;
interface IServerRenderResource
{

	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver $observer
	 * @return \System\Void|void
	 */
	public function AddObserver($observer);
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver $observer
	 * @return \System\Void|void
	 */
	public function RemoveObserver($observer);
	/**
	 * @return \System\Void|void
	 */
	public function QueuedInvalidate();
}