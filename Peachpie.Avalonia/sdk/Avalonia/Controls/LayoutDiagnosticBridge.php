<?php
namespace Avalonia\Controls;
/**
 */
class LayoutDiagnosticBridge extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function SetupBridge(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDiagnosticsPropertyChanged($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
