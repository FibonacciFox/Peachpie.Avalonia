<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SKCacheBase_2 extends \System\Object
{
	/**
	 * @var \System\Collections\Concurrent\ConcurrentBag_1[TCachedItem]
	 * @field
	 */
	protected readonly $Cache;
	/**
	 * @var \TCache
	 * @field
	 */
	public readonly $Shared;
	/**
	 * @return \Avalonia\Skia\TCachedItem
	 */
	public  function Get(){}
	/**
	 * @param \Avalonia\Skia\TCachedItem $item
	 * @return \System\Void|void
	 */
	public  function Return($item){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
