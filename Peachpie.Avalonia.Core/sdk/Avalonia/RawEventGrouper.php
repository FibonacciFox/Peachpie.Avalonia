<?php
namespace Avalonia;
/**
 */
class RawEventGrouper extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddToQueue($args){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Dispatch($ev){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $args
	 * @return \System\Void|void
	 */
	public  function HandleEvent($args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPooledList(){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $last
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $current
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MergeEvents($last, $current){}
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
