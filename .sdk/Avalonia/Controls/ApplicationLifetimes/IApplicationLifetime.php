<?php
namespace Avalonia\Controls\ApplicationLifetimes;
/**
 * @method \System\Void|void add_Activated($value) [modifier: public]
 * @method \System\Void|void remove_Activated($value) [modifier: public]
 * @method \System\Void|void add_Deactivated($value) [modifier: public]
 * @method \System\Void|void remove_Deactivated($value) [modifier: public]
*/
interface IActivatableApplicationLifetime
{


	/**
	 * @return \System\Boolean|bool
	 */
	public function TryLeaveBackground();
	/**
	 * @return \System\Boolean|bool
	 */
	public function TryEnterBackground();
}
<?php
namespace Avalonia\Controls\ApplicationLifetimes;
interface IApplicationLifetime
{



}