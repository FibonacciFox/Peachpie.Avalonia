<?php
namespace Avalonia\Controls;
class PopulatingEventArgs extends \System\ComponentModel\CancelEventArgs
{
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Parameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Cancel;
	/**
	 * @param \System\String|string $parameter
	 */
	public function __construct($parameter){}
}