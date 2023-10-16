<?php
namespace System;
/**
 */
class UnhandledExceptionEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $ExceptionObject;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTerminating;
	/**
	 * @return \System\Object|object
	 */
	public  function get_ExceptionObject(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsTerminating(){}
}
