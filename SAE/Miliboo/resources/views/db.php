<?php
$db = new PDO("pgsql:host=localhost;port=5433;dbname=BaseSAE301Miliboo","cacardt","7bSAL3");
$db->query('SET search_path TO public');