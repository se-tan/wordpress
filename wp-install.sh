#!/bin/bash

# WordPressの初期設定
wp core install \
--url="http://localhost:8080" \
--title="MyPortfolio" \
--admin_user='saytan' \
--admin_password='wsh28cmk' \
--admin_email='jam14_01@icloud.com' \
--allow-root

# 一般設定
wp language core install --allow-root --activate ja
wp option update --allow-root timezone_string 'Asia/Tokyo'
wp option update --allow-root date_format 'Y-m-d'
wp option update --allow-root time_format 'H:i'

# パーマリンク設定
wp option update permalink_structure --allow-root /%postname%/


# 不要なプラグインを削除
wp plugin delete --allow-root hello.php
wp plugin delete --allow-root akismet