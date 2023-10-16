<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface ILookup_2
{
	/**
	 */
	public function get_Count();
	/**
	 * @param \System\Linq\TKey $key
	 */
	public function get_Item($key);
	/**
	 * @param \System\Linq\TKey $key
	 */
	public function Contains($key);
}
