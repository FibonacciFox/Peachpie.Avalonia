<?php
namespace Avalonia\Platform;
interface IApplicationPlatformEvents
{


	/**
	 * @param \System\String $urls
	 * @return \System\Void|void
	 */
	public function RaiseUrlsOpened($urls);
}