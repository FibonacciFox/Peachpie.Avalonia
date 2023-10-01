<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class AppInitializer extends \System\Object implements 
	\Avalonia\DesignerSupport\Remote\IAppInitializer
{
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 * @param \Avalonia\DesignerSupport\Remote\CommandLineArgs $args
	 * @param \System\Object|object $obj
	 * @return \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection
	 */
	public  function ConfigureApp($transport, $args, $obj){}
	/**
	 * @param \System\String|string $assemblyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInitializer($assemblyName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
