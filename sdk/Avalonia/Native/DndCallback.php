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
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effect
	 * @return \System\Void|void
	 */
	public  function OnDragAndDropComplete($effect){}
}
