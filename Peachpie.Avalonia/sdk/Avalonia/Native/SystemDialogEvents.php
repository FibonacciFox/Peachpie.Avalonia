<?php
namespace Avalonia\Native;
/**
 */
class SystemDialogEvents extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnSystemDialogEvents
{
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function get_Task(){}
	/**
	 * @param \System\Int32|int $numResults
	 * @param \System\Void* $trFirstResultRef
	 * @return \System\Void|void
	 */
	public  function OnCompleted($numResults, $trFirstResultRef){}
}
