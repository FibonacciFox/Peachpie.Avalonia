<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class BatchStreamPoolBase_1 extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentUsage;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentPool;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentUsage(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentPool(){}
	/**
	 * @param \System\Action_1 $startTimer
	 * @param \System\WeakReference_1 $updateRef
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StartUpdateTimer($startTimer, $updateRef){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateStatistics(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Transport\T
	 */
	protected  function CreateItem(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\T $item
	 * @return \System\Void|void
	 */
	protected  function ClearItem($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\T $item
	 * @return \System\Void|void
	 */
	protected  function DestroyItem($item){}
	/**
	 * @return \Avalonia\Rendering\Composition\Transport\T
	 */
	public  function Get(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\T $item
	 * @return \System\Void|void
	 */
	public  function Return($item){}
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
