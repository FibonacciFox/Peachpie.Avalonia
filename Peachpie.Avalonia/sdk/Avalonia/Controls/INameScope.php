<?php
namespace Avalonia\Controls;
/**
 */
interface INameScope
{
	/**
	 * @param \System\String|string $name
	 * @param \System\Object|object $element
	 */
	public function Register($name, $element);
	/**
	 * @param \System\String|string $name
	 */
	public function FindAsync($name);
	/**
	 * @param \System\String|string $name
	 */
	public function Find($name);
	/**
	 */
	public function Complete();
	/**
	 */
	public function get_IsCompleted();
}
