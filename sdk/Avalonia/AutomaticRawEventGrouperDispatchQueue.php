<?php
namespace Avalonia;
/**
 */
class AutomaticRawEventGrouperDispatchQueue extends \System\Object implements 
	\Avalonia\IRawEventGrouperDispatchQueue
{
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $args
	 * @param \System\Action_1 $handler
	 * @return \System\Void|void
	 */
	public  function Add($args, $handler){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DispatchFromQueue(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
