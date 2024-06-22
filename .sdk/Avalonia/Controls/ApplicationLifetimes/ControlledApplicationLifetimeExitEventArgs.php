<?php
namespace Avalonia\Controls\ApplicationLifetimes;
class ControlledApplicationLifetimeExitEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ApplicationExitCode;
	/**
	 * @param \System\Int32|int $applicationExitCode
	 */
	public function __construct($applicationExitCode){}
}