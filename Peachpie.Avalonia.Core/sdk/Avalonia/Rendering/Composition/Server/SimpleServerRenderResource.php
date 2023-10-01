<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SimpleServerRenderResourceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_1($prop, $field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_2($field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_3($prop, $field, $value){}
}
/**
 */
class SimpleServerRenderResource extends \Avalonia\Rendering\Composition\Server\SimpleServerObject implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDisposed(){}
	/**
	 * @uses SimpleServerRenderResourceMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses SimpleServerRenderResourceMethodsOverride::SetValue_2 ($field, $value)
	 * @uses SimpleServerRenderResourceMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Invalidated(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\T& $field
	 * @return \System\Void|void
	 */
	protected  function RemoveObserversFromProperty($field){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResource $sender
	 * @return \System\Void|void
	 */
	public  function DependencyQueuedInvalidate($sender){}
	/**
	 * @return \System\Void|void
	 */
	protected  function PropertyChanged(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver $observer
	 * @return \System\Void|void
	 */
	public  function AddObserver($observer){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver $observer
	 * @return \System\Void|void
	 */
	public  function RemoveObserver($observer){}
	/**
	 * @return \System\Void|void
	 */
	public  function QueuedInvalidate(){}
}
