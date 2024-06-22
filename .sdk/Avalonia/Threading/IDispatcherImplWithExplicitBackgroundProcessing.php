<?php
namespace Avalonia\Threading;
/**
 * @method \System\Void|void add_ReadyForBackgroundProcessing($value) [modifier: public]
 * @method \System\Void|void remove_ReadyForBackgroundProcessing($value) [modifier: public]
*/
interface IDispatcherImplWithExplicitBackgroundProcessing
{


	/**
	 * @return \System\Void|void
	 */
	public function RequestBackgroundProcessing();
}