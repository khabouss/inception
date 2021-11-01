FILE=/var/lib/mysql/wordpress/wp_commentmeta.ibd
cp my.cnf /etc/mysql/
service mysql start
mysql -u root -e "CREATE USER '${MSQL_USER}'@'%' IDENTIFIED BY '${MSQL_USER_PASS}';"
if [ ! -f "$FILE" ]; then
	mysql -u root -e "CREATE DATABASE ${DB_NAME};"
	mysql -u root -e "USE ${DB_NAME}; GRANT ALL PRIVILEGES ON * TO '${MSQL_USER}'@'%'; "
	mysql -u root -e "FLUSH PRIVILEGES;"
	mysqladmin --user=root password ${MSQL_ROOT_PASS}
	mysql -u root --password=${MSQL_USER} ${DB_NAME} < /current_db.sql
fi
chown -R mysql:mysql /etc/mysql/*
service mysql stop
mysqld_safe
