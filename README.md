# ESpeakWeb
simple PHP interface for espeak on raspbian/debian

# Install 

Install the following packages 

````
$ sudo apt-get install apache2 libmodapache2-php5 php5 php5-common php5-cgi espeak sox
````

Place the PHP files in a directory accessible to apache. For example: /var/www/tts

Grant the apache2 service account access to play audio

````
$ sudo usermod -G audio www-data
````

Access the TTS site from your web browser. For example if your device's IP is 192.168.1.10 and you installed the php files in /var/www/tts you would go to http://192.168.11.10/tts

Use the form to test the TTS.

# Programmatic access

send an HTTP POST to the tts.php file with the following form values:

| field       | type    | description |
| ----------- | ------- | ------------ |
| tones       | bit     | send 1 to play tones before speech. 0 to skip tones |
| text        | string  | the text to speak |

Below is an example using curl:

````
curl --data "tones=1&text=test test" 192.168.1.10/tts/tts.php 
````
