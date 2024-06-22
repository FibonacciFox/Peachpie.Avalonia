<?php
namespace Avalonia\Controls;
class PopulatedEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \System\Collections\IEnumerable
	 */
	public $Data;
	/**
	 * @param \System\Collections\IEnumerable $data
	 */
	public function __construct($data){}
}