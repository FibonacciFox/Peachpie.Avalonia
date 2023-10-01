<?php
namespace Avalonia\OpenGL;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlBasicInfoInterfaceMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_1($v){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_2($v, $index){}
}
/**
 */
class GlBasicInfoInterface extends \System\Object
{
	/**
	 * @param \System\Int32|int $name
	 * @param \System\Int32& $rv
	 * @return \System\Void|void
	 */
	public  function GetIntegerv($name, $rv){}
	/**
	 * @param \System\Int32|int $v
	 * @return \System\IntPtr
	 */
	public  function GetStringNative($v){}
	/**
	 * @param \System\Int32|int $v
	 * @param \System\Int32|int $v1
	 * @return \System\IntPtr
	 */
	public  function GetStringiNative($v, $v1){}
	/**
	 * @uses GlBasicInfoInterfaceMethodsOverride::GetString_1 ($v)
	 * @uses GlBasicInfoInterfaceMethodsOverride::GetString_2 ($v, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function GetExtensions(){}
	/**
	 * @param \System\Func_2 $getProcAddress
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($getProcAddress){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
