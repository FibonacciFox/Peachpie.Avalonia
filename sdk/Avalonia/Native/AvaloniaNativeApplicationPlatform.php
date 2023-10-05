<?php
namespace Avalonia\Native;
/**
 */
class AvaloniaNativeApplicationPlatform extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnApplicationEvents,
	\Avalonia\Platform\IPlatformLifetimeEventsImpl
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDestroyed;
	/**
	 * @var \MicroCom\Runtime\MicroComShadow
	 * @property
	 */
	public $Shadow;
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ShutdownRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ShutdownRequested($value){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnStringArray $urls
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FilesOpened($urls){}
	/**
	 * @return \System\Int32|int
	 */
	public  function TryShutdown(){}
}
