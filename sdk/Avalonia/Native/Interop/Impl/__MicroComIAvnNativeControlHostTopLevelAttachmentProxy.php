<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnNativeControlHostTopLevelAttachmentProxyMethodsOverride
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
class __MicroComIAvnNativeControlHostTopLevelAttachmentProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnNativeControlHostTopLevelAttachment
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $ParentHandle;
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
	 * @return \System\IntPtr
	 */
	public  function get_ParentHandle(){}
	/**
	 * @param \System\IntPtr $child
	 * @return \System\Void|void
	 */
	public  function InitializeWithChildHandle($child){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnNativeControlHost $host
	 * @return \System\Void|void
	 */
	public  function AttachTo($host){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @param \System\Single $width
	 * @param \System\Single $height
	 * @return \System\Void|void
	 */
	public  function ShowInBounds($x, $y, $width, $height){}
	/**
	 * @param \System\Single $width
	 * @param \System\Single $height
	 * @return \System\Void|void
	 */
	public  function HideWithSize($width, $height){}
	/**
	 * @return \System\Void|void
	 */
	public  function ReleaseChild(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnNativeControlHostTopLevelAttachmentProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnNativeControlHostTopLevelAttachmentProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnNativeControlHostTopLevelAttachmentProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnNativeControlHostTopLevelAttachmentProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
