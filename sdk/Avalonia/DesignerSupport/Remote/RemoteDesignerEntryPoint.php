<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class RemoteDesignerEntryPoint extends \System\Object
{
	/**
	 * @param \System\String|string $error
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Die($error){}
	/**
	 * @param \System\String|string $message
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Log($message){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PrintUsage(){}
	/**
	 * @param \System\String[] $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseCommandLineArgs($args){}
	/**
	 * @param \Avalonia\DesignerSupport\Remote\CommandLineArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateTransport($args){}
	/**
	 * @param \System\String[] $cmdline
	 * @return \System\Void|void
	 */
	public static function Main($cmdline){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RebuildPreFlight(){}
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnTransportMessage($transport, $obj){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
