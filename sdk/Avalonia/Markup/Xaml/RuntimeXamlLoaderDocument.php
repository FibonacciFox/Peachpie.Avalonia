<?php
namespace Avalonia\Markup\Xaml;
/**
 */
class RuntimeXamlLoaderDocument extends \System\Object
{
	/**
	 * @var \System\Uri
	 * @property
	 */
	public $BaseUri;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $RootInstance;
	/**
	 * @var \System\IO\Stream
	 * @property
	 */
	public readonly $XamlStream;
	/**
	 * @var \System\IServiceProvider
	 * @property
	 */
	public $ServiceProvider;
	/**
	 * @return \System\Uri
	 */
	public  function get_BaseUri(){}
	/**
	 * @param \System\Uri $value
	 * @return \System\Void|void
	 */
	public  function set_BaseUri($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_RootInstance(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_RootInstance($value){}
	/**
	 * @return \System\IO\Stream
	 */
	public  function get_XamlStream(){}
	/**
	 * @return \System\IServiceProvider
	 */
	public  function get_ServiceProvider(){}
	/**
	 * @param \System\IServiceProvider $value
	 * @return \System\Void|void
	 */
	public  function set_ServiceProvider($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
