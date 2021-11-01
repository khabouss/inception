mkdir -p /var/www/html
cp wp-config.php /var/www/html/
cd /var/www/html/
wget https://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
mv wordpress/* .
rm -rf wordpress
service php7.3-fpm start
echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf


