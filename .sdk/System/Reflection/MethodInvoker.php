<?php
namespace System\Reflection;
final class MethodInvoker extends \System\Object
{

	/**
	 * @field
	 * @var \System\Reflection\InvocationFlags
	 */
	protected $_invocationFlags;
	private function InterpretedInvoke($obj, $arguments){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\IntPtr* $args
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @return \System\Object|object
	 */
	public function InlinedInvoke($obj, $args, $invokeAttr){}
	private function Invoke($obj, $args, $invokeAttr){}
	/**
	 * @param \System\Reflection\MethodBase $method
	 * @param \System\Signature $signature
	 */
	public function __construct($method, $signature){}
}