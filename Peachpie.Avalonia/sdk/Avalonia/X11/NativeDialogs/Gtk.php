<?php
namespace Avalonia\X11\NativeDialogs;
/**
 */
class Gtk extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function gtk_main_iteration(){}
	/**
	 * @param \System\IntPtr $window
	 * @param \System\Boolean $modal
	 * @return \System\Void|void
	 */
	public static function gtk_window_set_modal($window, $modal){}
	/**
	 * @param \System\IntPtr $gtkWindow
	 * @return \System\Void|void
	 */
	public static function gtk_window_present($gtkWindow){}
	/**
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $title
	 * @param \System\IntPtr $parent
	 * @param \Avalonia\X11\NativeDialogs\GtkFileChooserAction $action
	 * @param \System\IntPtr $ignore
	 * @return \System\IntPtr
	 */
	public static function gtk_file_chooser_dialog_new($title, $parent, $action, $ignore){}
	/**
	 * @param \System\IntPtr $chooser
	 * @param \System\Boolean $allow
	 * @return \System\Void|void
	 */
	public static function gtk_file_chooser_set_select_multiple($chooser, $allow){}
	/**
	 * @param \System\IntPtr $chooser
	 * @param \System\Boolean $do_overwrite_confirmation
	 * @return \System\Void|void
	 */
	public static function gtk_file_chooser_set_do_overwrite_confirmation($chooser, $do_overwrite_confirmation){}
	/**
	 * @param \System\IntPtr $raw
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $button_text
	 * @param \Avalonia\X11\NativeDialogs\GtkResponseType $response_id
	 * @return \System\Void|void
	 */
	public static function gtk_dialog_add_button($raw, $button_text, $response_id){}
	/**
	 * @param \System\IntPtr $chooser
	 * @return \Avalonia\X11\NativeDialogs\GSList*
	 */
	public static function gtk_file_chooser_get_filenames($chooser){}
	/**
	 * @param \System\IntPtr $chooser
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $file
	 * @return \System\Void|void
	 */
	public static function gtk_file_chooser_set_filename($chooser, $file){}
	/**
	 * @param \System\IntPtr $chooser
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $file
	 * @return \System\Void|void
	 */
	public static function gtk_file_chooser_set_current_name($chooser, $file){}
	/**
	 * @param \System\IntPtr $chooser
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $file
	 * @return \System\Void|void
	 */
	public static function gtk_file_chooser_set_current_folder($chooser, $file){}
	/**
	 * @return \System\IntPtr
	 */
	public static function gtk_file_filter_new(){}
	/**
	 * @param \System\IntPtr $filter
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $name
	 * @return \System\IntPtr
	 */
	public static function gtk_file_filter_set_name($filter, $name){}
	/**
	 * @param \System\IntPtr $filter
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $pattern
	 * @return \System\IntPtr
	 */
	public static function gtk_file_filter_add_pattern($filter, $pattern){}
	/**
	 * @param \System\IntPtr $filter
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $mimeType
	 * @return \System\IntPtr
	 */
	public static function gtk_file_filter_add_mime_type($filter, $mimeType){}
	/**
	 * @param \System\IntPtr $chooser
	 * @param \System\IntPtr $filter
	 * @return \System\IntPtr
	 */
	public static function gtk_file_chooser_add_filter($chooser, $filter){}
	/**
	 * @param \System\IntPtr $chooser
	 * @return \System\IntPtr
	 */
	public static function gtk_file_chooser_get_filter($chooser){}
	/**
	 * @param \System\IntPtr $gtkWidget
	 * @return \System\Void|void
	 */
	public static function gtk_widget_realize($gtkWidget){}
	/**
	 * @param \System\IntPtr $gtkWidget
	 * @return \System\Void|void
	 */
	public static function gtk_widget_destroy($gtkWidget){}
	/**
	 * @param \System\IntPtr $gtkWidget
	 * @return \System\IntPtr
	 */
	public static function gtk_widget_get_window($gtkWidget){}
	/**
	 * @param \System\IntPtr $gtkWidget
	 * @return \System\Void|void
	 */
	public static function gtk_widget_hide($gtkWidget){}
	/**
	 * @param \System\Int32|int $argc
	 * @param \System\IntPtr $argv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function gtk_init_check($argc, $argv){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $xid
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function gdk_x11_window_foreign_new_for_display($display, $xid){}
	/**
	 * @param \System\IntPtr $window
	 * @return \System\IntPtr
	 */
	public static function gdk_x11_window_get_xid($window){}
	/**
	 * @param \System\IntPtr $container
	 * @param \System\IntPtr $widget
	 * @return \System\IntPtr
	 */
	public static function gtk_container_add($container, $widget){}
	/**
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $backends
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function gdk_set_allowed_backends($backends){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function gdk_display_get_default(){}
	/**
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $appId
	 * @param \System\Int32|int $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function gtk_application_new($appId, $flags){}
	/**
	 * @param \System\IntPtr $window
	 * @param \System\IntPtr $parent
	 * @return \System\Void|void
	 */
	public static function gdk_window_set_transient_for($window, $parent){}
	/**
	 * @param \System\IntPtr $xid
	 * @return \System\IntPtr
	 */
	public static function GetForeignWindow($xid){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public static function StartGtk(){}
	/**
	 * @param \System\Threading\Tasks\TaskCompletionSource_1 $tcs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GtkThread($tcs){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StartGtkCore(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
