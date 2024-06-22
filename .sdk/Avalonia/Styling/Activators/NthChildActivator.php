<?php
namespace Avalonia\Styling\Activators;
final class NthChildActivator extends \Avalonia\Styling\Activators\StyleActivatorBase implements
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	private function ChildIndexChanged($sender, $e){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $control
	 * @param \Avalonia\LogicalTree\IChildIndexProvider $provider
	 * @param \System\Int32|int $step
	 * @param \System\Int32|int $offset
	 * @param \System\Boolean|bool $reversed
	 */
	public function __construct($control, $provider, $step, $offset, $reversed){}
}