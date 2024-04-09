<?php
namespace Avalonia\Controls\Presenters;
interface IContentPresenterHost
{

	/**
	 * @param \Avalonia\Controls\Presenters\ContentPresenter $presenter
	 * @return \System\Boolean|bool
	 */
	public function RegisterContentPresenter($presenter);
}