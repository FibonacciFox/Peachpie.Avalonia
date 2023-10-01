<?php
namespace Avalonia\Native\Interop;
/**
 */
class MenuEvents extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnMenuEvents
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $parent
	 * @return \System\Void|void
	 */
	public  function Initialise($parent){}
	/**
	 * @return \System\Void|void
	 */
	public  function NeedsUpdate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Opening(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Closed(){}
}
