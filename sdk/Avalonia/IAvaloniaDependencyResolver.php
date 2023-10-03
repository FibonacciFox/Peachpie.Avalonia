<?php
namespace Avalonia;
/**
 */
interface IAvaloniaDependencyResolver
{
	/**
	 * @param \System\Type $t
	 */
	public function GetService($t);
}
