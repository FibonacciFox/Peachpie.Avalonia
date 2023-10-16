<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Progress_1 extends \System\Object implements 
	\System\IProgress_1
{
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ProgressChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ProgressChanged($value){}
	/**
	 * @param \System\T $value
	 * @return \System\Void|void
	 */
	protected  function OnReport($value){}
	/**
	 * @param \System\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Report($value){}
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvokeHandlers($state){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
