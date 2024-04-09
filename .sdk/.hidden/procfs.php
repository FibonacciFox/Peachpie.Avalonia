<?php

class procfs extends \System\Object
{

	/**
	 * @param \System\Int32|int $pid
	 * @return \System\String|string
	 */
	protected static function GetStatusFilePathForProcess($pid){}
	/**
	 * @param \System\Int32|int $pid
	 * @param \Interop+procfs+ParsedStatus& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryReadStatusFile($pid, &$result){}
	/**
	 * @param \System\String|string $statusFilePath
	 * @param \Interop+procfs+ParsedStatus& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryParseStatusFile($statusFilePath, &$result){}
	private static function TryReadFile($path, &$contents){}
}