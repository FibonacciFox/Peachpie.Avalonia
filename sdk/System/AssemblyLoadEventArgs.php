<?php
namespace System;
/**
 */
class AssemblyLoadEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $LoadedAssembly;
	/**
	 * @return \System\Reflection\Assembly
	 */
	public  function get_LoadedAssembly(){}
}
