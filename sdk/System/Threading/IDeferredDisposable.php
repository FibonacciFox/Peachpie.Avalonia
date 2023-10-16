<?php
namespace System\Threading;
/**
 */
interface IDeferredDisposable
{
	/**
	 * @param \System\Boolean $disposed
	 */
	public function OnFinalRelease($disposed);
}
