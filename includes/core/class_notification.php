<?php

class Notification {

    // TEST

    public static function get_owner_notifications($data = []) {
        // where
        if (isset($data['only_read'])) $where = " AND viewed = '1'";
        // info
        $q = DB::query("SELECT title, description, viewed, created FROM user_notifications WHERE user_id = '" . Session::$user_id . "' ".$where.";") or die (DB::error());
        return DB::fetch_all($q);
    }

    public static function read_owner_notifications() {
        // read
        DB::query("UPDATE user_notifications SET viewed = 1 WHERE user_id = '" . Session::$user_id ."';") or die (DB::error());
        return 'ok';
    }

}
