<?php
namespace Avalonia\Platform;
interface IWindowIconImpl
{


	/**
	 * @param \System\IO\Stream $outputStream
	 * @return \System\Void|void
	 */
	public function Save($outputStream);
}