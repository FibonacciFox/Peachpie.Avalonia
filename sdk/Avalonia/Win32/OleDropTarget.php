<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OleDropTargetMethodsOverride
{
	/**
	 * @return \Avalonia\Win32\Win32Com\DropEffect
	 */
	#[MethodOverride] public static function ConvertDropEffect_1($operation){}
	/**
	 * @return \Avalonia\Input\DragDropEffects
	 */
	#[MethodOverride] public static function ConvertDropEffect_2($effect){}
}
/**
 */
class OleDropTarget extends \Avalonia\MicroCom\CallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\Avalonia\Win32\Win32Com\IDropTarget
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
	 * @uses OleDropTargetMethodsOverride::ConvertDropEffect_1 ($operation)
	 * @uses OleDropTargetMethodsOverride::ConvertDropEffect_2 ($effect)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConvertDropEffect(mixed ...$args){}
	/**
	 * @param \System\Int32|int $grfKeyState
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertKeyState($grfKeyState){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IDataObject $pDataObj
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DragEnter($pDataObj, $grfKeyState, $pt, $pdwEffect){}
	/**
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DragOver($grfKeyState, $pt, $pdwEffect){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DragLeave(){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IDataObject $pDataObj
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Drop($pDataObj, $grfKeyState, $pt, $pdwEffect){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IDataObject $pDataObj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetDataObject($pDataObj){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseDataObject(){}
	/**
	 * @param \Avalonia\Win32\Interop\POINT $dragPoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDragLocation($dragPoint){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IDataObject $pDataObj
	 * @return \Avalonia\Input\IDataObject
	 */
	public static function GetAvaloniaObjectFromCOM($pDataObj){}
}
