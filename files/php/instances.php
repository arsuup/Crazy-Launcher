<?php
$instance['Version Test'] = array_merge($instance['Version Test'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "1.20.1-47.4.0"
    ),
    "verify" => false,
    "ignored" => array(),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "LocalHost",
        "ip" => "localhost",
        "port" => 25565
    )
));
$instance['A'] = array_merge($instance['A'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(
        'Arsuup'
    ),
    "whitelistActive" => true,
    "status" => array(
        "nameServer" => "Serveur TAH les fous",
        "ip" => "localhost",
        "port" => 25565
    )
));
?>
