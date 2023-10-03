<?php
namespace Avalonia\Utilities;
/**
 */
class SimplePooledList extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @param \Avalonia\Utilities\T $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
	/**
	 * @param \Avalonia\Utilities\T[] $items
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReturnToPool($items){}
	/**
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GrowItems($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function EnsureCapacity($count){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Utilities\T $item
	 * @return \System\Boolean
	 */
	public  function Remove($item){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
