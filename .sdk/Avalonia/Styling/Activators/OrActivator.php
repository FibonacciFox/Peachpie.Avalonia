<?php
namespace Avalonia\Styling\Activators;
class OrActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable,
	\Avalonia\Styling\Activators\IStyleActivatorSink
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivator $activator
	 * @return \System\Void|void
	 */
	public function Add($activator){}
	private function OnNext($value){}
	/**
	 */
	public function __construct(){}
}