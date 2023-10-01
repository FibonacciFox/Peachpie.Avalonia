<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class TaskStreamPlugin_1 extends \System\Object implements 
	\Avalonia\Data\Core\Plugins\IStreamPlugin
{
	/**
	 * @param \System\WeakReference_1 $reference
	 * @return \System\Boolean
	 */
	public  function Match($reference){}
	/**
	 * @param \System\WeakReference_1 $reference
	 * @return \System\IObservable_1
	 */
	public  function Start($reference){}
	/**
	 * @param \System\Threading\Tasks\Task_1 $task
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HandleCompleted($task){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
