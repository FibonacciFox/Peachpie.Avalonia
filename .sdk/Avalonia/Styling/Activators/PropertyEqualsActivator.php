<?php
namespace Avalonia\Styling\Activators;
class PropertyEqualsActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable,
	\System\IObserver_1
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	private function OnCompleted(){}
	private function OnError($error){}
	private function OnNext($value){}
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Object|object $value
	 */
	public function __construct($control, $property, $value){}
}