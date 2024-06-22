<?php
namespace Avalonia\Controls\ApplicationLifetimes;
class ShutdownRequestedEventArgs extends \System\ComponentModel\CancelEventArgs
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Cancel;
	/**
	 */
	public function __construct(){}
}