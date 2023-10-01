<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnTextInputMethodProxyMethodsOverride
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
class __MicroComIAvnTextInputMethodProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnTextInputMethod
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnTextInputMethodClient $client
	 * @return \System\Void|void
	 */
	public  function SetClient($client){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnRect $rect
	 * @return \System\Void|void
	 */
	public  function SetCursorRect($rect){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $anchorOffset
	 * @param \System\Int32|int $cursorOffset
	 * @return \System\Void|void
	 */
	public  function SetSurroundingText($text, $anchorOffset, $cursorOffset){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnTextInputMethodProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnTextInputMethodProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnTextInputMethodProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnTextInputMethodProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
