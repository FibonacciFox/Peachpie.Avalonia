<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventListenerSubscription extends \System\Object
{
	/**
	 * @return \System\Diagnostics\Tracing\EventKeywords
	 */
	protected  function get_MatchAnyKeywords(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventKeywords $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_MatchAnyKeywords($value){}
	/**
	 * @return \System\Diagnostics\Tracing\EventLevel
	 */
	protected  function get_Level(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventLevel $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Level($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
