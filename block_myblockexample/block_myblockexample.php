<?php

class block_myblockexample extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_myblockexample');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        global $DB;
        $usercount = $DB->count_records('user', array('deleted' => 0));


        $this->content = new stdClass();
        $this->content->text = 'Test' . $usercount;
        $this->content->footer = 'Footer text here';

        return $this->content;
    }
}
