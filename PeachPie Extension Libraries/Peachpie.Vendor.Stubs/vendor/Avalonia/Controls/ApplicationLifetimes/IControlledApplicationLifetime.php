<?php
namespace Avalonia\Controls\ApplicationLifetimes;
/**
 * @method \System\Void|void add_Startup($value) [modifier: public]
 * @method \System\Void|void remove_Startup($value) [modifier: public]
 * @method \System\Void|void add_Exit($value) [modifier: public]
 * @method \System\Void|void remove_Exit($value) [modifier: public]
*/
interface IControlledApplicationLifetime
{

	/**
	 * @param \System\Int32|int $exitCode
	 * @return \System\Void|void
	 */
	public function Shutdown($exitCode);
}