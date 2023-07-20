<?php
$namespace = str_replace("\\", "/", @yaml_parse_file("plugin.yml")["src-namespace-prefix"] ?? exit);
rename("src", "src/$namespace");
var_dump($namespace);