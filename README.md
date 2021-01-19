
# Tests um mehrere docker-container in verschiedenen Urls und Pfade laufen zu lassen.

## Szenario

In diesem Szenario sollen 3 Applikationen über einen Proxy laufen und wahlweise als Pfad von example.com (http://example.com/app1/) oder als subdomain (http:app1.example.com) ausgegeben werden.

Die 3. App wird dabei in einer eigenen docker-compose Datei abgebildet und über das externe Netzwerk mit dem Proxy verbunden, damit auch eine lose kopplung untersucht wird.

Eine 4. Instanz kommt über zammad in die Datei.
Diese wird ebenfalls über das externe Netzwerk mit dem Proxy verbunden.

## Vorbereitungen:

Notwendige Einträge in die /etc/hosts:

````
127.0.0.1 example.com app1.example.com app2.example.com app3.example.com tickets.example.com
````


## Variablen

<https://blog.agchapman.com/using-variables-in-docker-compose-files/>

Die Variablen können spezifisch für eine Umgebung und z.b. für den Computernamen eingesetzt werden.

Beispiel `.env`
````
HostNameApp1=app1_test.example.com
````

Damit kann wird der Webserver mit einer anderen SCRIPT_URI bzw. http host aufgerufen.

die Url <http://app1.example.com/> liefert dann folgende Variablen:

````
SCRIPT_URI	http://app1_test.example.com/
HTTP_HOST	app1_test.example.com
SERVER_NAME	app1_test.example.com
````

### wie können Variablen in die apache config-files verwendet werden?

