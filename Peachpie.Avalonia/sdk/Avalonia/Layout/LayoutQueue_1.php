<?php
namespace Avalonia\Layout;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LayoutQueue_1MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class LayoutQueue_1 extends \System\Object implements 
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @uses LayoutQueue_1MethodsOverride::GetEnumerator_1 ()
	 * @uses LayoutQueue_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \Avalonia\Layout\T
	 */
	public  function Dequeue(){}
	/**
	 * @param \Avalonia\Layout\T $item
	 * @return \System\Void|void
	 */
	public  function Enqueue($item){}
	/**
	 * @param \System\Int32|int $maxEnqueueCountPerLoop
	 * @return \System\Void|void
	 */
	public  function BeginLoop($maxEnqueueCountPerLoop){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndLoop(){}
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
