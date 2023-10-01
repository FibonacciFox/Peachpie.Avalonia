<?php
namespace Avalonia\Controls\Presenters;
/**
 */
interface IContentPresenterHost
{
	/**
	 */
	public function get_LogicalChildren();
	/**
	 * @param \Avalonia\Controls\Presenters\ContentPresenter $presenter
	 */
	public function RegisterContentPresenter($presenter);
}
