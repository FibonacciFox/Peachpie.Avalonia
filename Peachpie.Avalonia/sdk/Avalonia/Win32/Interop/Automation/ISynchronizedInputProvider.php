<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface ISynchronizedInputProvider
{
	/**
	 * @param \Avalonia\Win32\Interop\Automation\SynchronizedInputType $inputType
	 */
	public function StartListening($inputType);
	/**
	 */
	public function Cancel();
}
