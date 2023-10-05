<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class RunLoopHandler extends \Avalonia\MicroCom\CallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\Avalonia\Win32\WinRT\IAsyncActionCompletedHandler
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
	 * @param \Avalonia\Win32\WinRT\IAsyncAction $asyncInfo
	 * @param \Avalonia\Win32\WinRT\AsyncStatus $asyncStatus
	 * @return \System\Void|void
	 */
	public  function Invoke($asyncInfo, $asyncStatus){}
}
