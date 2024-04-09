<?php
namespace Avalonia\Input;
class InputManager extends \System\Object implements
	\Avalonia\Input\IInputManager
{
	/**
	 * @property
	 * @var \Avalonia\Input\IInputManager
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @property
	 * @var \System\IObservable_1[Avalonia\Input\Raw\RawInputEventArgs]
	 * @since readonly
	 */
	public $PreProcess;
	/**
	 * @property
	 * @var \System\IObservable_1[Avalonia\Input\Raw\RawInputEventArgs]
	 * @since readonly
	 */
	public $Process;
	/**
	 * @property
	 * @var \System\IObservable_1[Avalonia\Input\Raw\RawInputEventArgs]
	 * @since readonly
	 */
	public $PostProcess;
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	public function ProcessInput($e){}
	/**
	 */
	public function __construct(){}
}