
# Tests um mehrere docker-container in verschiedenen Urls und Pfade laufen zu lassen.

## Szenario

In diesem Szenario sollen 3 Applikationen über einen Proxy laufen und wahlweise als Pfad von example.com (http://example.com/app1/) oder als subdomain (http:app1.example.com) ausgegeben werden.

Die 3. App wird dabei in einer eigenen docker-compose Datei abgebildet und über das externe Netzwerk mit dem Proxy verbunden, damit auch eine lose kopplung untersucht wird.


## Vorbereitungen:

Notwendige Einträge in die /etc/hosts:

````
127.0.0.1 example.com app1.example.com app2.example.com app3.example.com
````


