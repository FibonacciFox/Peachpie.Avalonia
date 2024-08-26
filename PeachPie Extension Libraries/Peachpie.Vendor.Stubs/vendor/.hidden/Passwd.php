<?php

final class Passwd extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Byte*
	 */
	protected $Name;
	/**
	 * @field
	 * @var \System\Byte*
	 */
	protected $Password;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $UserId;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	protected $GroupId;
	/**
	 * @field
	 * @var \System\Byte*
	 */
	protected $UserInfo;
	/**
	 * @field
	 * @var \System\Byte*
	 */
	protected $HomeDirectory;
	/**
	 * @field
	 * @var \System\Byte*
	 */
	protected $Shell;

}