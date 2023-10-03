<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDropSourceProxyMethodsOverride
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
class __MicroComIDropSourceProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\Win32Com\IDropSource
{
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
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIDropSourceProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDropSourceProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDropSourceProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDropSourceProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
