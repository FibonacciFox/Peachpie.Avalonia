<?php
namespace Avalonia\Controls\ApplicationLifetimes;
class ActivatedEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \Avalonia\Controls\ApplicationLifetimes\ActivationKind
	 * @since readonly
	 */
	public $Kind;
	/**
	 * @param \Avalonia\Controls\ApplicationLifetimes\ActivationKind $kind
	 */
	public function __construct($kind){}
}