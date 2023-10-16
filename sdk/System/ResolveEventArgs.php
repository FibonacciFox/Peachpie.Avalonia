<?php
namespace System;
/**
 */
class ResolveEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $RequestingAssembly;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	public  function get_RequestingAssembly(){}
}
