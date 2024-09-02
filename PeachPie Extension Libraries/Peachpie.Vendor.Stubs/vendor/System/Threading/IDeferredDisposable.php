<?php
namespace System\Threading;
interface IDeferredDisposable
{

	/**
	 * @param \System\Boolean|bool $disposed
	 * @return \System\Void|void
	 */
	public function OnFinalRelease($disposed);
}