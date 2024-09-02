<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UriOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $uri
	 */
	#[MethodOverride]public function __construct_2 ($uri){}
	/**
	 * @param \System\Uri $uri
	 */
	#[MethodOverride]public function __construct_3 ($uri){}
	/**
	 * @param \System\String|string $schemeName
	 * @param \System\String|string $hostName
	 */
	#[MethodOverride]public function __construct_4 ($schemeName, $hostName){}
	/**
	 * @param \System\String|string $scheme
	 * @param \System\String|string $host
	 * @param \System\Int32|int $portNumber
	 */
	#[MethodOverride]public function __construct_5 ($scheme, $host, $portNumber){}
	/**
	 * @param \System\String|string $scheme
	 * @param \System\String|string $host
	 * @param \System\Int32|int $port
	 * @param \System\String|string $pathValue
	 */
	#[MethodOverride]public function __construct_6 ($scheme, $host, $port, $pathValue){}
	/**
	 * @param \System\String|string $scheme
	 * @param \System\String|string $host
	 * @param \System\Int32|int $port
	 * @param \System\String|string $path
	 * @param \System\String|string $extraValue
	 */
	#[MethodOverride]public function __construct_7 ($scheme, $host, $port, $path, $extraValue){}
}
class UriBuilder extends \System\Object
{
	use UriOverride;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Scheme;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $UserName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Password;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Host;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Port;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Path;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Query;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Fragment;
	/**
	 * @property
	 * @var \System\Uri
	 * @since readonly
	 */
	public $Uri;
	private function SetFieldsFromUri(){}
	/**
	 * @uses UriBuilderOverride::__construct_1 <br>public , args: ()<br>
	 * @uses UriBuilderOverride::__construct_2 <br>public , args: ($uri)<br>
	 * @uses UriBuilderOverride::__construct_3 <br>public , args: ($uri)<br>
	 * @uses UriBuilderOverride::__construct_4 <br>public , args: ($schemeName, $hostName)<br>
	 * @uses UriBuilderOverride::__construct_5 <br>public , args: ($scheme, $host, $portNumber)<br>
	 * @uses UriBuilderOverride::__construct_6 <br>public , args: ($scheme, $host, $port, $pathValue)<br>
	 * @uses UriBuilderOverride::__construct_7 <br>public , args: ($scheme, $host, $port, $path, $extraValue)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}