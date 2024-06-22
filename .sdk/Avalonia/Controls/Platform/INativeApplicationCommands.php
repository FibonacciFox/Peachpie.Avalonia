<?php
namespace Avalonia\Controls\Platform;
interface INativeApplicationCommands
{


	/**
	 * @return \System\Void|void
	 */
	public function ShowApp();
	/**
	 * @return \System\Void|void
	 */
	public function HideApp();
	/**
	 * @return \System\Void|void
	 */
	public function ShowAll();
	/**
	 * @return \System\Void|void
	 */
	public function HideOthers();
}