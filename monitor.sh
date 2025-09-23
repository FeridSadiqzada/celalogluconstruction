#!/bin/bash

# Server monitoring script

echo "📊 Server Status Monitor"
echo "======================="

# Check services
echo "🔄 Service Status:"
echo "Nginx: $(systemctl is-active nginx)"
echo "PHP-FPM: $(systemctl is-active php8.3-fpm)"
echo "MySQL: $(systemctl is-active mysql)"
echo "Redis: $(systemctl is-active redis-server)"
echo ""

# Check disk space
echo "💾 Disk Usage:"
df -h / | tail -1 | awk '{print "Used: " $3 " / " $2 " (" $5 ")"}'
echo ""

# Check memory
echo "🧠 Memory Usage:"
free -h | grep Mem | awk '{print "Used: " $3 " / " $2}'
echo ""

# Check CPU load
echo "⚡ CPU Load:"
uptime | awk '{print "Load Average: " $(NF-2) " " $(NF-1) " " $NF}'
echo ""

# Check Laravel logs
echo "📝 Recent Laravel Logs:"
if [ -f "/var/www/html/storage/logs/laravel.log" ]; then
    tail -5 /var/www/html/storage/logs/laravel.log
else
    echo "No Laravel logs found"
fi
echo ""

# Check Nginx access logs
echo "🌐 Recent Nginx Access:"
if [ -f "/var/log/nginx/access.log" ]; then
    tail -3 /var/log/nginx/access.log
else
    echo "No Nginx access logs found"
fi
echo ""

# Check SSL certificate expiry
echo "🔒 SSL Certificate Status:"
if command -v openssl &> /dev/null; then
    echo "Certificate expires: $(echo | openssl s_client -servername your-domain.com -connect your-domain.com:443 2>/dev/null | openssl x509 -noout -dates | grep notAfter | cut -d= -f2)"
else
    echo "OpenSSL not available"
fi