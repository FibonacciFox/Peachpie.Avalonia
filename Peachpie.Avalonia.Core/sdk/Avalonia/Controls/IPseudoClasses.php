<?php
namespace Avalonia\Controls;
/**
 */
interface IPseudoClasses
{
	/**
	 * @param \System\String|string $name
	 */
	public function Add($name);
	/**
	 * @param \System\String|string $name
	 */
	public function Remove($name);
	/**
	 * @param \System\String|string $name
	 */
	public function Contains($name);
}
