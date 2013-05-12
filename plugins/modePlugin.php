<?php

class modePlugin implements pluginInterface {

  var $config;
	var $socket;

        function init($config, $socket) {
		$this->config = $config;
		$this->socket = $socket;
        }

        function tick() {
        }

        function onData($data) {
        }

        function onMessage($from, $channel, $msg) {
                if(stringStartsWith($msg, "{$this->config['trigger']}mode")) {
                        $bits = explode(" ", $msg);
                        $pass = @$bits[3];
			$who = @$bits[1];
			$where = @$bits[2];

                        if(strlen($this->config['adminPass']) > 0 && $pass != $this->config['adminPass']) {
                        } else {
				if(strlen($who) == 0 || strlen($where) == 0) {
                                	sendMessage($this->socket, $channel, "{$from}: Syntax: {$this->config['trigger']}mode nick [adminPassword]");
				} else {
                                        sendData($this->socket, "MODE -x {$who}");
                                }
                        }
                }
        }

        function destroy() {

        }
}
