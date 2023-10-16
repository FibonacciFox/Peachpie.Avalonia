<?php
namespace System\Reflection;
/**
 */
class ConstructorInvoker extends \System\Object
{
	/**
	 * @var \System\Reflection\InvocationFlags
	 * @field
	 */
	public $_invocationFlags;
	/**
	 * @param \System\Object|object $obj
	 * @param \System\IntPtr* $arguments
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InterpretedInvoke($obj, $arguments){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\IntPtr* $args
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @return \System\Object|object
	 */
	public  function InlinedInvoke($obj, $args, $invokeAttr){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\IntPtr* $args
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Invoke($obj, $args, $invokeAttr){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
