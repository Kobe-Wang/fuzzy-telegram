<?php
    return array(
        "paths" => array(
            "migrations" => "migrations_new"
        ),
        "environments" => array(
            "default_migration_table" => "phinxlog_temp",
            "default_database" => "default",
            "default" => array(
                "adapter" => "mysql",
                "host" => getenv('RDS_HOSTNAME'),
                "name" => getenv('RDS_DB_NAME'),
                "user" => getenv('RDS_USERNAME'),
                "pass" => getenv('RDS_PASSWORD')
            )
        )
    );