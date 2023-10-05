<?php
namespace Avalonia\Win32;
/**
 */
class OleDragSource extends \Avalonia\MicroCom\CallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\Avalonia\Win32\Win32Com\IDropSource
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
	 * @param \System\Int32|int $fEscapePressed
	 * @param \System\Int32|int $grfKeyState
	 * @return \System\Int32|int
	 */
	public  function QueryContinueDrag($fEscapePressed, $grfKeyState){}
	/**
	 * @param \Avalonia\Win32\Win32Com\DropEffect $dwEffect
	 * @return \System\Int32|int
	 */
	public  function GiveFeedback($dwEffect){}
}
