<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IMemoryHandler_1
{
	/**
	 * @param \System\IO\T& $memory
	 */
	public function GetLength($memory);
	/**
	 * @param \System\IO\T& $memory
	 */
	public function Pin($memory);
}
