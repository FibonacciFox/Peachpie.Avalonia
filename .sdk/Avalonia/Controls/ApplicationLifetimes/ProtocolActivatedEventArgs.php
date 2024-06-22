<?php
namespace Avalonia\Controls\ApplicationLifetimes;
class ProtocolActivatedEventArgs extends \Avalonia\Controls\ApplicationLifetimes\ActivatedEventArgs
{

	/**
	 * @property
	 * @var \System\Uri
	 * @since readonly
	 */
	public $Uri;
	/**
	 * @property
	 * @var \Avalonia\Controls\ApplicationLifetimes\ActivationKind
	 * @since readonly
	 */
	public $Kind;
	/**
	 * @param \Avalonia\Controls\ApplicationLifetimes\ActivationKind $kind
	 * @param \System\Uri $uri
	 */
	public function __construct($kind, $uri){}
}