<?php
namespace System\IO\Pipelines;
/**
 */
interface IDuplexPipe
{
	/**
	 */
	public function get_Input();
	/**
	 */
	public function get_Output();
}
