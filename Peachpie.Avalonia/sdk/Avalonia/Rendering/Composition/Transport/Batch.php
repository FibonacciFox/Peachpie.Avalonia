<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 */
class Batch extends \System\Object
{
	/**
	 * @return \System\Int64|int
	 */
	public  function get_SequenceId(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Transport\BatchStreamData
	 */
	public  function get_Changes(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamData $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Changes($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_CommittedAt(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_CommittedAt($value){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function get_Processed(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function get_Rendered(){}
	/**
	 * @return \System\Void|void
	 */
	public  function NotifyProcessed(){}
	/**
	 * @return \System\Void|void
	 */
	public  function NotifyRendered(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
