<?php
namespace Avalonia;
interface IAvaloniaDependencyResolver
{


	/**
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	public function GetService($t);
}