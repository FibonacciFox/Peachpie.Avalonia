<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIVectorOfCompositionShapeProxyMethodsOverride
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
class __MicroComIVectorOfCompositionShapeProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\IVectorOfCompositionShape
{
	/**
	 * @return \System\Void|void
	 */
	public  function GetAt(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetSize(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetView(){}
	/**
	 * @return \System\Void|void
	 */
	public  function IndexOf(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetAt(){}
	/**
	 * @return \System\Void|void
	 */
	public  function InsertAt(){}
	/**
	 * @return \System\Void|void
	 */
	public  function RemoveAt(){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionShape $value
	 * @return \System\Void|void
	 */
	public  function Append($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function RemoveAtEnd(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @uses __MicroComIVectorOfCompositionShapeProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIVectorOfCompositionShapeProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIVectorOfCompositionShapeProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIVectorOfCompositionShapeProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
