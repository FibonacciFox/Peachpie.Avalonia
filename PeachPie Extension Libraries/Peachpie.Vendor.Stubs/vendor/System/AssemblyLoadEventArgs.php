<?php
namespace System;
class AssemblyLoadEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $LoadedAssembly;
	/**
	 * @param \System\Reflection\Assembly $loadedAssembly
	 */
	public function __construct($loadedAssembly){}
}