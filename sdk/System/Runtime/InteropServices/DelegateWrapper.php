<?php
namespace System\Runtime\InteropServices;
/**
 */
class DelegateWrapper extends \System\Object
{
	/**
	 * @var \System\Delegate
	 * @property
	 */
	public $Delegate;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $WrapArgs;
	/**
	 * @return \System\Delegate
	 */
	public  function get_Delegate(){}
	/**
	 * @param \System\Delegate $value
	 * @return \System\Void|void
	 */
	public  function set_Delegate($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_WrapArgs(){}
	/**
	 * @param \System\Object[] $args
	 * @return \System\Object|object
	 */
	public  function Invoke($args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PreProcessSignature(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
