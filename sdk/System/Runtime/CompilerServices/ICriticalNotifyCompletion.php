<?php
namespace System\Runtime\CompilerServices;
/**
 */
interface ICriticalNotifyCompletion
{
	/**
	 * @param \System\Action $continuation
	 */
	public function UnsafeOnCompleted($continuation);
}
