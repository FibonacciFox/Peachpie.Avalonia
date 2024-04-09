<?php
namespace Avalonia\Media;
class MediaContextClock extends \System\Object implements
	\Avalonia\Animation\IGlobalClock,
	\Avalonia\Animation\IClock,
	\System\IObservable_1
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasNewSubscriptions;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasSubscriptions;
	/**
	 * @property
	 * @var \Avalonia\Animation\PlayState
	 */
	public $PlayState;
	/**
	 * @param \System\IObserver_1 $observer [generic: System\TimeSpan]
	 * @return \System\IDisposable
	 */
	public function Subscribe($observer){}
	/**
	 * @param \System\Action_1 $action [generic: System\TimeSpan]
	 * @return \System\Void|void
	 */
	public function RequestAnimationFrame($action){}
	/**
	 * @param \System\TimeSpan $now
	 * @return \System\Void|void
	 */
	public function Pulse($now){}
	/**
	 * @return \System\Void|void
	 */
	public function PulseNewSubscriptions(){}
	/**
	 * @param \Avalonia\Media\MediaContext $parent
	 */
	public function __construct($parent){}
}