<?php
namespace Avalonia\Native\Interop;
/**
 */
class AvnString extends \Avalonia\Native\NativeCallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnString
{
	/**
	 * @return \System\String|string
	 */
	public  function get_String(){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_Bytes(){}
	/**
	 * @return \System\Void*
	 */
	public  function Pointer(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function Length(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureNative(){}
}
