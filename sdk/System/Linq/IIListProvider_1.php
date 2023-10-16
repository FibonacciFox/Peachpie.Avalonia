<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IIListProvider_1
{
	/**
	 */
	public function ToArray();
	/**
	 */
	public function ToList();
	/**
	 * @param \System\Boolean $onlyIfCheap
	 */
	public function GetCount($onlyIfCheap);
}
