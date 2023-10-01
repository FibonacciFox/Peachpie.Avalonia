<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnSystemDialogEvents
{
	/**
	 * @param \System\Int32|int $numResults
	 * @param \System\Void* $ptrFirstResult
	 */
	public function OnCompleted($numResults, $ptrFirstResult);
}
