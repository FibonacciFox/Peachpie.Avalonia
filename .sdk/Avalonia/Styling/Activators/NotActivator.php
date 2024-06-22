<?php
namespace Avalonia\Styling\Activators;
class NotActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable,
	\Avalonia\Styling\Activators\IStyleActivatorSink
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	private function OnNext($value){}
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivator $source
	 */
	public function __construct($source){}
}