<?php
namespace System\Runtime\CompilerServices;
/**
 */
interface INotifyCompletion
{
	/**
	 * @param \System\Action $continuation
	 */
	public function OnCompleted($continuation);
}
