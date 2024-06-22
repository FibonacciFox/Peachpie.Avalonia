<?php

final class FileStatus extends \System\ValueType
{

	/**
	 * @field
	 * @var \Interop+Sys+FileStatusFlags
	 */
	protected $Flags;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Mode;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $Uid;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $Gid;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $Size;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $ATime;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $ATimeNsec;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $MTime;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $MTimeNsec;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $CTime;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $CTimeNsec;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $BirthTime;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $BirthTimeNsec;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $Dev;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $RDev;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $Ino;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $UserFlags;

}