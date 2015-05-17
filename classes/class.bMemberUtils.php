<?php

/**
 * BMemberUtils
 *
 * @author nur
 */
abstract class BMemberUtils {

    public static function is_member_logged_in() {
        $auth = BAuth::get_instance();
        if ($auth->is_logged_in()) {
            return true;
        } else {
            return false;
        }
    }

    public static function get_logged_in_members_id() {
        $auth = BAuth::get_instance();
        if (!$auth->is_logged_in()) {
            return bUtils::_("User is not logged in.");
        }
        return $auth->userData->member_id;
    }

    public static function get_logged_in_members_level() {
        $auth = BAuth::get_instance();
        if (!$auth->is_logged_in()) {
            return bUtils::_("User is not logged in.");
        }
        return $auth->userData->membership_level;
    }

}
