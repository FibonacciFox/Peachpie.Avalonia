<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IAsyncEnumerable_1
{
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 */
	public function GetAsyncEnumerator($cancellationToken);
}
