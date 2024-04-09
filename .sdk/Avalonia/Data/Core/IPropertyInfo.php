<?php
namespace Avalonia\Data\Core;
interface IPropertyInfo
{

	/**
	 * @param \System\Object|object $target
	 * @return \System\Object|object
	 */
	public function Get($target);
	/**
	 * @param \System\Object|object $target
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function Set($target, $value);
}