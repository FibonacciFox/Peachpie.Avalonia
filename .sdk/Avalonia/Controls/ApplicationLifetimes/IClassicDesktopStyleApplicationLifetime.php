<?php
namespace Avalonia\Controls\ApplicationLifetimes;
/**
 * @method \System\Void|void add_ShutdownRequested($value) [modifier: public]
 * @method \System\Void|void remove_ShutdownRequested($value) [modifier: public]
*/
interface IClassicDesktopStyleApplicationLifetime
{


	/**
	 * @param \System\Int32|int $exitCode
	 * @return \System\Boolean|bool
	 */
	public function TryShutdown($exitCode);
}