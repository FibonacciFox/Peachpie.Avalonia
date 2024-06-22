<?php
namespace Avalonia\Styling\Activators;
class StyleActivatorBase extends \System\Object implements
	\Avalonia\Styling\Activators\IStyleActivator,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSubscribed;
	/**
	 * @return \System\Boolean|bool
	 */
	public function GetIsActive(){}
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivatorSink $sink
	 * @return \System\Void|void
	 */
	public function Subscribe($sink){}
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivatorSink $sink
	 * @return \System\Void|void
	 */
	public function Unsubscribe($sink){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Boolean|bool
	 */
	abstract protected function EvaluateIsActive();
	/**
	 * @return \System\Boolean|bool
	 */
	protected function ReevaluateIsActive(){}
	/**
	 * @return \System\Void|void
	 */
	abstract protected function Initialize();
	/**
	 * @return \System\Void|void
	 */
	abstract protected function Deinitialize();
}