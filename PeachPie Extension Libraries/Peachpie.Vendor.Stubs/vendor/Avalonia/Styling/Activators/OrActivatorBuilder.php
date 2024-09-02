<?php
namespace Avalonia\Styling\Activators;
final class OrActivatorBuilder extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivator $activator
	 * @return \System\Void|void
	 */
	public function Add($activator){}
	/**
	 * @return \Avalonia\Styling\Activators\IStyleActivator
	 */
	public function Get(){}
}