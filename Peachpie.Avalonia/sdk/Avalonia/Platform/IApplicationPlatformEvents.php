<?php
namespace Avalonia\Platform;
/**
 */
interface IApplicationPlatformEvents
{
	/**
	 * @param \System\String[] $urls
	 */
	public function RaiseUrlsOpened($urls);
}
