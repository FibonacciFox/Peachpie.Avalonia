<?php
namespace Avalonia\X11;
/**
 */
enum CursorFontShape implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case XC_X_cursor = 0;
	case XC_arrow = 2;
	case XC_based_arrow_down = 4;
	case XC_based_arrow_up = 6;
	case XC_boat = 8;
	case XC_bogosity = 10;
	case XC_bottom_left_corner = 12;
	case XC_bottom_right_corner = 14;
	case XC_bottom_side = 16;
	case XC_bottom_tee = 18;
	case XC_box_spiral = 20;
	case XC_center_ptr = 22;
	case XC_circle = 24;
	case XC_clock = 26;
	case XC_coffee_mug = 28;
	case XC_cross = 30;
	case XC_cross_reverse = 32;
	case XC_crosshair = 34;
	case XC_diamond_cross = 36;
	case XC_dot = 38;
	case XC_dotbox = 40;
	case XC_double_arrow = 42;
	case XC_draft_large = 44;
	case XC_draft_small = 46;
	case XC_draped_box = 48;
	case XC_exchange = 50;
	case XC_fleur = 52;
	case XC_gobbler = 54;
	case XC_gumby = 56;
	case XC_hand1 = 58;
	case XC_hand2 = 60;
	case XC_heart = 62;
	case XC_icon = 64;
	case XC_iron_cross = 66;
	case XC_left_ptr = 68;
	case XC_left_side = 70;
	case XC_left_tee = 72;
	case XC_left_button = 74;
	case XC_ll_angle = 76;
	case XC_lr_angle = 78;
	case XC_man = 80;
	case XC_middlebutton = 82;
	case XC_mouse = 84;
	case XC_pencil = 86;
	case XC_pirate = 88;
	case XC_plus = 90;
	case XC_question_arrow = 92;
	case XC_right_ptr = 94;
	case XC_right_side = 96;
	case XC_right_tee = 98;
	case XC_rightbutton = 100;
	case XC_rtl_logo = 102;
	case XC_sailboat = 104;
	case XC_sb_down_arrow = 106;
	case XC_sb_h_double_arrow = 108;
	case XC_sb_left_arrow = 110;
	case XC_sb_right_arrow = 112;
	case XC_sb_up_arrow = 114;
	case XC_sb_v_double_arrow = 116;
	case XC_sb_shuttle = 118;
	case XC_sizing = 120;
	case XC_spider = 122;
	case XC_spraycan = 124;
	case XC_star = 126;
	case XC_target = 128;
	case XC_tcross = 130;
	case XC_top_left_arrow = 132;
	case XC_top_left_corner = 134;
	case XC_top_right_corner = 136;
	case XC_top_side = 138;
	case XC_top_tee = 140;
	case XC_trek = 142;
	case XC_ul_angle = 144;
	case XC_umbrella = 146;
	case XC_ur_angle = 148;
	case XC_watch = 150;
	case XC_xterm = 152;
	case XC_num_glyphs = 154;
}
