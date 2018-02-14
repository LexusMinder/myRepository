<?php

class SessionControl {

    public static function startSession($id_user, $username) {
        if (session_id() == '') {
            session_start();
        }

        $_SESSION['id_user'] = $id_user;
        $_SESSION['username'] = $username;
    }

    public static function closeSession() {
        if (session_id() == '') {
            session_start();
        }

        if (isset($_SESSION['id_user'])) {
            unset($_SESSION['id_user']);
        }

        if (isset($_SESSION['username'])) {
            unset($_SESSION['username']);
        }

        session_destroy();
    }

    public function showSession() {
        if (session_id() == '') {
            session_start();
        }

        if (isset($_SESSION['id_user']) && isset($_SESSION['username'])) {
            return true;
        } else {
            return false;
        }
    }

}
