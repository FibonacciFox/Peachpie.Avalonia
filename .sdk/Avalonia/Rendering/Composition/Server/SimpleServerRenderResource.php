<?php
namespace Avalonia\Rendering\Composition\Server;
class SimpleServerRenderResource extends \Avalonia\Rendering\Composition\Server\SimpleServerObject implements
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @since readonly
	 */
	public $Compositor;
	/**
	 * @return \System\Void|void
	 */
	protected function Invalidated(){}
	/**
	 * @param \T& $field
	 * @return \System\Void|void
	 */
	protected function RemoveObserversFromProperty($field){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResource $sender
	 * @return \System\Void|void
	 */
	public function DependencyQueuedInvalidate($sender){}
	/**
	 * @return \System\Void|void
	 */
	protected function PropertyChanged(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver $observer
	 * @return \System\Void|void
	 */
	public function AddObserver($observer){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver $observer
	 * @return \System\Void|void
	 */
	public function RemoveObserver($observer){}
	/**
	 * @return \System\Void|void
	 */
	public function QueuedInvalidate(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositor $compositor
	 */
	public function __construct($compositor){}
}