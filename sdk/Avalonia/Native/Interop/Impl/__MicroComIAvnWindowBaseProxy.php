<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnWindowBaseProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComIAvnWindowBaseProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnWindowBase
{
	/**
	 * @var \Avalonia\Native\Interop\AvnSize
	 * @property
	 */
	public readonly $ClientSize;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Scaling;
	/**
	 * @var \Avalonia\Native\Interop\AvnPoint
	 * @property
	 */
	public readonly $Position;
	/**
	 * @var \Avalonia\Native\Interop\IAvnTextInputMethod
	 * @property
	 */
	public readonly $InputMethod;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NativePointer;
	/**
	 * @var \System\Void***
	 * @property
	 */
	public readonly $PPV;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $OwnsHandle;
	/**
	 * @param \System\Int32|int $activate
	 * @param \System\Int32|int $isDialog
	 * @return \System\Void|void
	 */
	public  function Show($activate, $isDialog){}
	/**
	 * @return \System\Void|void
	 */
	public  function Hide(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @return \Avalonia\Native\Interop\AvnSize
	 */
	public  function get_ClientSize(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnSize* $result
	 * @return \System\Void|void
	 */
	public  function GetFrameSize($result){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnSize $minSize
	 * @param \Avalonia\Native\Interop\AvnSize $maxSize
	 * @return \System\Void|void
	 */
	public  function SetMinMaxSize($minSize, $maxSize){}
	/**
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 * @param \Avalonia\Native\Interop\AvnPlatformResizeReason $reason
	 * @return \System\Void|void
	 */
	public  function Resize($width, $height, $reason){}
	/**
	 * @param \Avalonia\Native\Interop\AvnRect $rect
	 * @return \System\Void|void
	 */
	public  function Invalidate($rect){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginMoveDrag(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnWindowEdge $edge
	 * @return \System\Void|void
	 */
	public  function BeginResizeDrag($edge){}
	/**
	 * @return \Avalonia\Native\Interop\AvnPoint
	 */
	public  function get_Position(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @return \System\Void|void
	 */
	public  function SetPosition($point){}
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @return \Avalonia\Native\Interop\AvnPoint
	 */
	public  function PointToClient($point){}
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @return \Avalonia\Native\Interop\AvnPoint
	 */
	public  function PointToScreen($point){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function SetTopMost($value){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnCursor $cursor
	 * @return \System\Void|void
	 */
	public  function SetCursor($cursor){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnGlContext $context
	 * @return \Avalonia\Native\Interop\IAvnGlSurfaceRenderTarget
	 */
	public  function CreateGlRenderTarget($context){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnSoftwareRenderTarget
	 */
	public  function CreateSoftwareRenderTarget(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnMetalDevice $device
	 * @return \Avalonia\Native\Interop\IAvnMetalRenderTarget
	 */
	public  function CreateMetalRenderTarget($device){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $menu
	 * @return \System\Void|void
	 */
	public  function SetMainMenu($menu){}
	/**
	 * @return \System\IntPtr
	 */
	public  function ObtainNSWindowHandle(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function ObtainNSWindowHandleRetained(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function ObtainNSViewHandle(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function ObtainNSViewHandleRetained(){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnNativeControlHost
	 */
	public  function CreateNativeControlHost(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\IAvnClipboard $clipboard
	 * @param \Avalonia\Native\Interop\IAvnDndResultCallback $cb
	 * @param \System\IntPtr $sourceHandle
	 * @return \System\Void|void
	 */
	public  function BeginDragAndDropOperation($effects, $point, $clipboard, $cb, $sourceHandle){}
	/**
	 * @param \Avalonia\Native\Interop\AvnWindowTransparencyMode $mode
	 * @return \System\Void|void
	 */
	public  function SetTransparencyMode($mode){}
	/**
	 * @param \Avalonia\Native\Interop\AvnPlatformThemeVariant $mode
	 * @return \System\Void|void
	 */
	public  function SetFrameThemeVariant($mode){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnTextInputMethod
	 */
	public  function get_InputMethod(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnWindowBaseProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnWindowBaseProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnWindowBaseProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnWindowBaseProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
