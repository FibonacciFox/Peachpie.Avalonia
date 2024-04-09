<?php
namespace Avalonia\Controls\Remote;
class RemoteServer extends \System\Object
{
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Content;
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 */
	public function __construct($transport){}
}