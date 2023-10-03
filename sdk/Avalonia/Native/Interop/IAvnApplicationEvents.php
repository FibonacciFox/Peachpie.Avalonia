<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnApplicationEvents
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnStringArray $urls
	 */
	public function FilesOpened($urls);
	/**
	 */
	public function TryShutdown();
}
