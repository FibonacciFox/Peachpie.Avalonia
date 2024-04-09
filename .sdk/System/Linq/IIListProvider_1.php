<?php
namespace System\Linq;
interface IIListProvider_1
{

	/**
	 * @return \TElement[]
	 */
	public function ToArray();
	/**
	 * @return \System\Collections\Generic\List_1[TElement]
	 */
	public function ToList();
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap);
}