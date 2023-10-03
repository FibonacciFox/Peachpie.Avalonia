<?php
namespace Avalonia\Remote\Protocol;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class EventStash_1 extends \System\Object
{
	/**
	 * @param \System\Action_2 $handler
	 * @return \System\Void|void
	 */
	public  function Add($handler){}
	/**
	 * @param \System\Action_2 $handler
	 * @return \System\Void|void
	 */
	public  function Remove($handler){}
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 * @param \Avalonia\Remote\Protocol\T $ev
	 * @return \System\Void|void
	 */
	public  function Fire($transport, $ev){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
