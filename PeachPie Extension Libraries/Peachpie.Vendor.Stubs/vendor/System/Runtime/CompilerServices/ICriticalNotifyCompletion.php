<?php
namespace System\Runtime\CompilerServices;
interface ICriticalNotifyCompletion
{

	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function UnsafeOnCompleted($continuation);
}