<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
interface IAppInitializer
{
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 * @param \Avalonia\DesignerSupport\Remote\CommandLineArgs $args
	 * @param \System\Object|object $obj
	 */
	public function ConfigureApp($transport, $args, $obj);
}
