<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnWindowBaseVTableMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_1($d){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_2($m){}
}
/**
 */
class __MicroComIAvnWindowBaseVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $activate
	 * @param \System\Int32|int $isDialog
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Show($this, $activate, $isDialog){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Hide($this){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Close($this){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Activate($this){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnSize* $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetClientSize($this, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnSize* $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFrameSize($this, $result){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Double* $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetScaling($this, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnSize $minSize
	 * @param \Avalonia\Native\Interop\AvnSize $maxSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetMinMaxSize($this, $minSize, $maxSize){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 * @param \Avalonia\Native\Interop\AvnPlatformResizeReason $reason
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Resize($this, $width, $height, $reason){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnRect $rect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Invalidate($this, $rect){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BeginMoveDrag($this){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnWindowEdge $edge
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BeginResizeDrag($this, $edge){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnPoint* $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPosition($this, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetPosition($this, $point){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\AvnPoint* $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PointToClient($this, $point, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\AvnPoint* $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PointToScreen($this, $point, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetTopMost($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $cursor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetCursor($this, $cursor){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $context
	 * @param \System\Void** $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateGlRenderTarget($this, $context, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSoftwareRenderTarget($this, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $device
	 * @param \System\Void** $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateMetalRenderTarget($this, $device, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $menu
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetMainMenu($this, $menu){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $retOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ObtainNSWindowHandle($this, $retOut){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $retOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ObtainNSWindowHandleRetained($this, $retOut){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $retOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ObtainNSViewHandle($this, $retOut){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $retOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ObtainNSViewHandleRetained($this, $retOut){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $retOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateNativeControlHost($this, $retOut){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \System\Void* $clipboard
	 * @param \System\Void* $cb
	 * @param \System\IntPtr $sourceHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BeginDragAndDropOperation($this, $effects, $point, $clipboard, $cb, $sourceHandle){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnWindowTransparencyMode $mode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetTransparencyMode($this, $mode){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnPlatformThemeVariant $mode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetFrameThemeVariant($this, $mode){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInputMethod($this, $ppv){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnWindowBaseVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnWindowBaseVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
