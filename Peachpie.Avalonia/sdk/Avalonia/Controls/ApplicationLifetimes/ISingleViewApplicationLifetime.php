<?php
namespace Avalonia\Controls\ApplicationLifetimes;
/**
 */
interface ISingleViewApplicationLifetime
{
	/**
	 */
	public function get_MainView();
	/**
	 * @param \Avalonia\Controls\Control $value
	 */
	public function set_MainView($value);
}
