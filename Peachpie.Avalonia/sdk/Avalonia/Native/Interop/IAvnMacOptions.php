<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnMacOptions
{
	/**
	 * @param \System\Int32|int $show
	 */
	public function SetShowInDock($show);
	/**
	 * @param \System\String|string $utf8string
	 */
	public function SetApplicationTitle($utf8string);
	/**
	 * @param \System\Int32|int $disable
	 */
	public function SetDisableSetProcessName($disable);
	/**
	 * @param \System\Int32|int $disable
	 */
	public function SetDisableAppDelegate($disable);
}
