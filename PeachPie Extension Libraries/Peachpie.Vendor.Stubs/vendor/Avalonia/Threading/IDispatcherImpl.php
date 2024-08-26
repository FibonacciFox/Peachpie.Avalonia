<?php
namespace Avalonia\Threading;
/**
 * @method \System\Void|void add_Signaled($value) [modifier: public]
 * @method \System\Void|void remove_Signaled($value) [modifier: public]
 * @method \System\Void|void add_Timer($value) [modifier: public]
 * @method \System\Void|void remove_Timer($value) [modifier: public]
*/
interface IDispatcherImpl
{

	/**
	 * @return \System\Void|void
	 */
	public function Signal();
	/**
	 * @param \System\Nullable_1 $dueTimeInMs [generic: System\Int64]
	 * @return \System\Void|void
	 */
	public function UpdateTimer($dueTimeInMs);
}