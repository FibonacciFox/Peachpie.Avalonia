<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DesktopApplicationExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Application $app
	 * @param \Avalonia\Input\ICloseable $closable
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Run_1 ($app, $closable){}
	/**
	 * @deprecated
	 * @param \Avalonia\Application $app
	 * @param \Avalonia\Controls\Window $mainWindow
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Run_2 ($app, $mainWindow){}
	/**
	 * @deprecated
	 * @param \Avalonia\Application $app
	 * @param \System\Threading\CancellationToken $token
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Run_3 ($app, $token){}
}
class DesktopApplicationExtensions extends \System\Object
{
	use DesktopApplicationExtensionsOverride;


	/**
	 * @uses DesktopApplicationExtensionsOverride::Run_1 <br>public , args: ($app, $closable)<br>
	 * @uses DesktopApplicationExtensionsOverride::Run_2 <br>public , args: ($app, $mainWindow)<br>
	 * @uses DesktopApplicationExtensionsOverride::Run_3 <br>public , args: ($app, $token)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Run (\override ...$args){}
	/**
	 * @param \Avalonia\Application $app
	 * @return \System\Void|void
	 */
	public static function RunWithMainWindow($app){}
}