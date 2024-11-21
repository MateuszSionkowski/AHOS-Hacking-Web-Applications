#!/bin/bash

# Check if the script is run with sudo
if [[ "$EUID" -ne 0 ]]; then
  echo "This script must be run with sudo. Exiting." >&2
  exit 1
fi

# Your script's main logic goes here
echo "Running with sudo. Proceeding..."

service nginx start

# If there are any contents of the /var/www/html folder - move them as backup before overwriting
if [ -d "/var/www/html" ]; then
   mv  /var/www/html /var/www/html_$(date +%Y-%m-%d_%H-%M)
fi

apt-get -y update
apt-get  install -y php8.2
apt-get  install -y php8.2-fpm
service  php8.2-fpm start

apt-get install -y php8.2-sqlite3
apt-get install -y docker-cli
apt-get install -y docker.io

cp -r html /var/www/
cp nginx/default /etc/nginx/sites-enabled/
chmod 777 /etc/nginx/sites-enabled/default
chmod -R 777 /var/www/html

service nginx restart

# docker containers with prebuild vulnerable apps
docker run -d --restart unless-stopped -p 8000:80 --name drupal-vuln-container allhandsonsec/vulnerable-drupal:latest
docker run -d --restart unless-stopped -p 9000:80 --name thinkphp-vuln-container vulhub/thinkphp:5.0.23

echo "" >> /etc/hosts 
echo "127.0.0.1 lab.local" >> /etc/hosts

# setting up homepage
sed -i 's|file:///usr/share/kali-defaults/web/homepage.html|http://lab.local|' /etc/chromium/master_preferences
for dir in /home/kali/.mozilla/firefox/*default*; do echo 'user_pref("browser.startup.homepage", "http://lab.local");' >> "$dir/user.js"; chmod a+r "$dir/user.js"; done

# Unzip wordlists
sudo gunzip /usr/share/wordlists/rockyou.txt.gz

echo "Installation Complete"


