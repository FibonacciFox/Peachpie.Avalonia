<?php
namespace Avalonia;
/**
 */
class ManualRawEventGrouperDispatchQueue extends \System\Object implements 
	\Avalonia\IRawEventGrouperDispatchQueue
{
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $args
	 * @param \System\Action_1 $handler
	 * @return \System\Void|void
	 */
	public  function Add($args, $handler){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasJobs(){}
	/**
	 * @return \System\Void|void
	 */
	public  function DispatchNext(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
