<?php
namespace Avalonia\Native;
/**
 */
class DndCallback extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnDndResultCallback
{
	/**
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effect
	 * @return \System\Void|void
	 */
	public  function OnDragAndDropComplete($effect){}
}
