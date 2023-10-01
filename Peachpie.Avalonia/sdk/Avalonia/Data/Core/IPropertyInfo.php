<?php
namespace Avalonia\Data\Core;
/**
 */
interface IPropertyInfo
{
	/**
	 */
	public function get_Name();
	/**
	 * @param \System\Object|object $target
	 */
	public function Get($target);
	/**
	 * @param \System\Object|object $target
	 * @param \System\Object|object $value
	 */
	public function Set($target, $value);
	/**
	 */
	public function get_CanSet();
	/**
	 */
	public function get_CanGet();
	/**
	 */
	public function get_PropertyType();
}
