<?php
namespace System\Runtime\CompilerServices;
interface INotifyCompletion
{

	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation);
}